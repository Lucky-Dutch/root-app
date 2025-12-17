defmodule PhoenixApiWeb.UserRandomizer do
  @moduledoc false
  alias PhoenixApi.Repo
  alias PhoenixApi.Users.User

  @woman_first_names_url "https://api.dane.gov.pl/1.4/resources/63924/data"
  @man_first_names_url "https://api.dane.gov.pl/1.4/resources/63929/data"
  @woman_last_names_url "https://api.dane.gov.pl/1.4/resources/63888/data"
  @man_last_names_url "https://api.dane.gov.pl/1.4/resources/63892/data"
  @bithday_range Date.range(~D[1970-01-01], ~D[2024-12-24])

  def import_new_users() do
    case Repo.exists?(User) do
      false ->
        create_users()

      true ->
        delete_all_users()
        create_users()
    end
  end

  def create_users() do
    Repo.insert_all(User, user_randomizer())
  end

  def user_randomizer do
    last_names_woman = fetch_woman_last_names()
    last_names_man = fetch_man_last_names()

    fetch_first_names()
    |> Enum.take_random(100)
    |> Enum.map(fn {first_name, gender} ->
      last_name =
        case gender do
          "KOBIETA" -> Enum.random(last_names_woman) |> elem(0)
          "MĘŻCZYZNA" -> Enum.random(last_names_man) |> elem(0)
        end

      Map.new(%{
        first_name: first_name,
        last_name: last_name,
        gender: gender(gender),
        birthdate: Enum.random(@bithday_range)
      })
    end)
  end

  def delete_all_users() do
    Repo.delete_all(User)
  end

  defp fetch_first_names do
    fetch_woman_first_names() ++ fetch_man_first_names()
  end

  defp fetch_woman_first_names do
    fetch_data(@woman_first_names_url)
  end

  defp fetch_man_first_names do
    fetch_data(@man_first_names_url)
  end

  defp fetch_woman_last_names do
    fetch_data(@woman_last_names_url)
  end

  defp fetch_man_last_names do
    fetch_data(@man_last_names_url)
  end

  defp fetch_data(url) do
    case Req.get!(url, params: %{"per_page" => "100"}) do
      %{status: 200, body: body} ->
        body
        |> Map.get("data", [])
        |> Enum.map(&{&1["attributes"]["col1"]["val"], &1["attributes"]["col2"]["val"]})

      %{status: status_code} ->
        IO.puts("Failed to fetch data. Status code: #{status_code}")
        []
    end
  end

  defp gender("KOBIETA"), do: "female"
  defp gender("MĘŻCZYZNA"), do: "male"
end
