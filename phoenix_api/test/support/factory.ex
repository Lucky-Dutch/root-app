defmodule PhoenixApi.Factory do
  alias PhoenixApi.Repo

  def build(:user) do
    %PhoenixApi.Users.User{
      first_name: "first_name_#{System.unique_integer()}",
      last_name: "last_name_#{System.unique_integer()}",
      birthdate: Enum.random(Date.range(~D[1970-01-01], Date.utc_today())),
      gender: Enum.random(["male", "female"])
    }
  end

  # Convenience API

  def build(factory_name, attributes) do
    factory_name |> build() |> struct!(attributes)
  end

  def insert!(factory_name, attributes \\ []) do
    factory_name |> build(attributes) |> Repo.insert!()
  end

  def insert_list!(count, factory_name, attributes \\ []) do
    Enum.map(1..count, fn _ -> insert!(factory_name, attributes) end)
  end
end
