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
    case Users.create_user(params) do
      {:ok, _user} ->
        conn
        |> put_status(:ok)
        |> json(%{message: "User created successfully!"})

      {:error, changeset} ->
        conn
        |> put_status(:bad_request)
        |> json(%{error: "Failed to create user", details: changeset.errors})
        |> halt()
    end
  end

  def update(conn, params) do
    user = Users.get_user(params["id"])

    case Users.update_user(user, params) do
      {:ok, user} ->
        conn
        |> put_status(:ok)
        |> json(%{user: user})

      {:error, changeset} ->
        conn
        |> put_status(:bad_request)
        |> json(%{error: "Failed to update user", details: changeset.errors})
        |> halt()
    end
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
