defmodule PhoenixApiWeb.UserController do
  use PhoenixApiWeb, :controller

  alias PhoenixApi.Repo
  alias PhoenixApi.Users.User
  alias PhoenixApi.Users

  def index(conn, params) do
    users = Users.list_users(params)

    conn
    |> put_status(:ok)
    |> json(%{users: users})
  end

  def show(conn, %{"id" => id}) do
    user = Repo.get(User, id)

    conn
    |> put_status(:ok)
    |> json(%{user: user})
  end

  def create(conn, params) do
    {:ok, user} = Users.create_user(params)

    conn
    |> put_status(:ok)
    |> json(%{message: "User created successfully!"})
  end

  def update(conn, params) do
    user =
      User
      |> Repo.get(params["id"])
      |> User.changeset(params)

    {:ok, user} = Repo.update(user)

    conn
    |> put_status(:ok)
    |> json(%{user: user})
  end

  def delete(conn, %{"id" => id}) do
    id
    |> Users.get_user()
    |> Users.delete_user()

    conn
    |> put_status(:ok)
    |> json(%{message: "User with ID #{id} deleted successfully!"})
  end

  def import(conn, _params) do
    case PhoenixApiWeb.UserRandomizer.import_new_users() do
      {100, nil} ->
        conn
        |> put_status(:ok)
        |> json(%{message: "Users imported successfully!"})

      reason ->
        conn
        |> put_status(:internal_server_error)
        |> json(%{error: "Failed to import users: #{reason}"})
    end
  end
end
