#Build a BankAccount class with withdraw and deposit methods. Use
# assert to ensure withdrawal amount is positive, raise to throw
# InsufficientBalanceError, and finally to log every transaction
# attempt to a text file.

# Custom Exception for Insufficient Balance
class InsufficientBalanceError(Exception):
    """Raised when withdrawal amount exceeds available balance."""
    pass


class BankAccount:
    def __init__(self, account_holder, balance=0):
        self.account_holder = account_holder
        self.balance = balance

    def deposit(self, amount):
        try:
            assert amount > 0, "❌ Deposit amount must be positive."
            self.balance += amount
            print(f"✅ Deposited ₹{amount}. Current Balance: ₹{self.balance}")

        except AssertionError as e:
            print(e)

        finally:
            # Log every transaction attempt
            self._log_transaction("DEPOSIT", amount)

    def withdraw(self, amount):
        try:
            assert amount > 0, "❌ Withdrawal amount must be positive."

            if amount > self.balance:
                raise InsufficientBalanceError(
                    f"❌ Insufficient Balance! You tried to withdraw ₹{amount}, "
                    f"but only ₹{self.balance} is available."
                )

            self.balance -= amount
            print(f"✅ Withdrawn ₹{amount}. Remaining Balance: ₹{self.balance}")

        except AssertionError as e:
            print(e)
        except InsufficientBalanceError as e:
            print(e)

        finally:
            # Log every transaction attempt
            self._log_transaction("WITHDRAW", amount)

    def _log_transaction(self, transaction_type, amount):
        """Logs every transaction attempt to a text file."""
        with open("transaction_log.txt", "a") as file:
            file.write(
                f"{transaction_type} - ₹{amount} | "
                f"Holder: {self.account_holder} | "
                f"Balance: ₹{self.balance}\n"
            )


# Example usage
if __name__ == "__main__":
    account = BankAccount("Rahul Sharma", 5000)

    # Valid deposit
    account.deposit(2000)

    # Invalid deposit (negative)
    account.deposit(-500)

    # Valid withdrawal
    account.withdraw(3000)

    # Invalid withdrawal (exceeds balance)
    account.withdraw(10000)

    # Invalid withdrawal (negative)
    account.withdraw(-200)
