#Implement a PasswordManager class that raises custom exceptions
# (WeakPasswordError, PasswordMismatchError) when user creates or
# updates a password not following given security rules.

# Custom exceptions
class WeakPasswordError(Exception):
    """Raised when password doesn't meet security rules."""
    pass

class PasswordMismatchError(Exception):
    """Raised when new password and confirm password don't match."""
    pass


class PasswordManager:
    def __init__(self, username):
        self.username = username
        self.password = None

    def create_password(self, new_password, confirm_password):
        try:
            # Check if both passwords match
            if new_password != confirm_password:
                raise PasswordMismatchError("❌ Password and Confirm Password do not match.")

            # Check for password strength
            if not self.is_strong_password(new_password):
                raise WeakPasswordError(
                    "❌ Weak Password! Password must contain at least:\n"
                    "- 8 characters\n- One uppercase letter\n- One lowercase letter\n- One digit\n- One special character"
                )

            self.password = new_password
            print(f"✅ Password created successfully for user '{self.username}'!")

        except (WeakPasswordError, PasswordMismatchError) as e:
            print(e)

    def update_password(self, old_password, new_password, confirm_password):
        try:
            if self.password is None:
                print("⚠️ No password set. Please create a password first.")
                return

            if old_password != self.password:
                raise PasswordMismatchError("❌ Old password is incorrect.")

            # Check if new passwords match
            if new_password != confirm_password:
                raise PasswordMismatchError("❌ New password and confirm password do not match.")

            # Check if new password is strong
            if not self.is_strong_password(new_password):
                raise WeakPasswordError("❌ Weak Password! Follow password rules for better security.")

            self.password = new_password
            print(f"✅ Password updated successfully for '{self.username}'!")

        except (WeakPasswordError, PasswordMismatchError) as e:
            print(e)

    def is_strong_password(self, password):
        """Check for password strength rules."""
        import re
        if (len(password) >= 8 and
            re.search(r"[A-Z]", password) and
            re.search(r"[a-z]", password) and
            re.search(r"[0-9]", password) and
            re.search(r"[@$!%*?&]", password)):
            return True
        return False


# Example usage
pm = PasswordManager("Rahul")

# Trying weak password
pm.create_password("rahul", "rahul")

# Trying strong password
pm.create_password("Rahul@123", "Rahul@123")

# Updating password (with incorrect old password)
pm.update_password("wrongpass", "NewPass@123", "NewPass@123")

# Updating password correctly
pm.update_password("Rahul@123", "StrongPass@999", "StrongPass@999")
