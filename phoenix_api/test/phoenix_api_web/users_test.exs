defmodule PhoenixApiWeb.UsersTest do
  use PhoenixApiWeb.ConnCase, async: true

  import PhoenixApi.Factory
  alias PhoenixApi.Users

  describe "list_users/1" do
    test "lists all users" do
      insert_list!(20, :user)

      users = Users.list_users(%{})
      assert length(users) == 20
    end

    test "filters users by first_name" do
      insert!(:user, first_name: "Alice")
      insert!(:user, first_name: "Bob")

      users = Users.list_users(%{"first_name" => "Alice"})
      assert length(users) == 1
      assert hd(users).first_name == "Alice"
    end

    test "filters users by birthdate range" do
      insert!(:user, birthdate: ~D[1990-01-01])
      insert!(:user, birthdate: ~D[2000-01-01])

      users =
        Users.list_users(%{"birthdate_from" => "1985-01-01", "birthdate_to" => "1995-12-31"})

      assert length(users) == 1
      assert hd(users).birthdate == ~D[1990-01-01]
    end

    test "sorts users by last_name descending" do
      insert!(:user, last_name: "Anderson")
      insert!(:user, last_name: "Brown")

      users = Users.list_users(%{"sort" => "last_name", "direction" => "desc"})
      assert length(users) == 2
      assert hd(users).last_name == "Brown"
    end
  end

  describe "get_user/1" do
    test "retrieves a user by ID" do
      user = insert!(:user)

      fetched_user = Users.get_user(user.id)
      assert fetched_user.id == user.id
    end
  end

  describe "create_user/1" do
    test "creates a user with valid data" do
      valid_attrs = %{
        "first_name" => "John",
        "last_name" => "Doe",
        "birthdate" => ~D[1990-01-01],
        "gender" => "male"
      }

      assert {:ok, %Users.User{} = user} = Users.create_user(valid_attrs)
      assert user.first_name == "John"
      assert user.last_name == "Doe"
    end

    test "fails to create a user with invalid data" do
      invalid_attrs = %{
        "first_name" => "",
        "last_name" => "Doe",
        "birthdate" => ~D[1990-01-01],
        "gender" => "unknown"
      }

      assert {:error, _changeset} = Users.create_user(invalid_attrs)
    end
  end

  describe "update_user/2" do
    test "updates a user with valid data" do
      user = insert!(:user)

      update_attrs = %{
        "first_name" => "Jane",
        "last_name" => "Smith"
      }

      assert {:ok, %Users.User{} = updated_user} = Users.update_user(user, update_attrs)
      assert updated_user.first_name == "Jane"
      assert updated_user.last_name == "Smith"
    end

    test "fails to update a user with invalid data" do
      user = insert!(:user)

      invalid_attrs = %{
        "first_name" => ""
      }

      assert {:error, _changeset} = Users.update_user(user, invalid_attrs)
    end
  end

  test "delete_user/1" do
    user = insert!(:user)
    assert {:ok, %Users.User{} = deleted_user} = Users.delete_user(user)
    assert deleted_user.id == user.id
  end
end
