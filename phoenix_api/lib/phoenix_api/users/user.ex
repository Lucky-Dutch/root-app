defmodule PhoenixApi.Users.User do
  use Ecto.Schema

  @derive {Jason.Encoder, only: [:id, :first_name, :last_name, :gender, :birthdate]}
  schema "users" do
    field :first_name, :string
    field :last_name, :string
    field :gender, :string
    field :birthdate, :date
  end

  def changeset(user, attrs) do
    Ecto.Changeset.cast(user, attrs, [:first_name, :last_name, :gender, :birthdate])
  end
end
