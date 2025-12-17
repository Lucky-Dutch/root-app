defmodule PhoenixApi.Repo.Migrations.AddUsers do
  use Ecto.Migration

  def change do
    create table(:users) do
      add :first_name, :string, null: false
      add :last_name, :string, null: false
      add :gender, :string, null: false
      add :birthdate, :date, null: false
    end
  end
end
