defmodule PhoenixApi.Users do
  import Ecto.Query, warn: false

  alias PhoenixApi.Repo
  alias PhoenixApi.Users.User

  def list_users(params) do
    User
    |> maybe_filter(:first_name, params["first_name"])
    |> maybe_filter(:last_name, params["last_name"])
    |> maybe_filter(:gender, params["gender"])
    |> maybe_range_from(:birthdate, params["birthdate_from"])
    |> maybe_range_to(:birthdate, params["birthdate_to"])
    |> apply_sort(params)
    |> Repo.all()
  end

  defp maybe_filter(query, _field, nil), do: query
  defp maybe_filter(query, _field, ""), do: query

  defp maybe_filter(query, field, value),
    do: where(query, [u], ilike(field(u, ^field), ^value))

  defp maybe_range_from(query, _field, nil), do: query

  defp maybe_range_from(query, field, value),
    do: where(query, [u], field(u, ^field) >= ^value)

  defp maybe_range_to(query, _field, nil), do: query

  defp maybe_range_to(query, field, value),
    do: where(query, [u], field(u, ^field) <= ^value)

  defp apply_sort(query, %{"sort" => sort, "direction" => dir}) do
    case {to_sort_field(sort), to_dir(dir)} do
      {nil, _} -> order_by(query, [u], asc: :id)
      {field, :asc} -> order_by(query, [u], asc: field(u, ^field))
      {field, :desc} -> order_by(query, [u], desc: field(u, ^field))
    end
  end

  defp apply_sort(query, _), do: order_by(query, [u], asc: :id)

  defp to_sort_field(nil), do: nil
  defp to_sort_field(field), do: String.to_atom(field)

  defp to_dir("desc"), do: :desc
  defp to_dir(_), do: :asc

  def get_user(id) do
    Repo.get(User, id)
  end

  def create_user(attrs) do
    %User{}
    |> User.changeset(attrs)
    |> Repo.insert()
  end

  def update_user(user, attrs) do
    user
    |> User.changeset(attrs)
    |> Repo.update()
  end

  def delete_user(user) do
    Repo.delete(user)
  end
end
