#Create a DatabaseConnection class where the constructor simulates
# connecting to a database and the destructor automatically closes the connection
# and logs the closing time in a file.

import time
from datetime import datetime

class DatabaseConnection:
    def __init__(self, db_name):
        """Constructor — simulate connecting to a database"""
        self.db_name = db_name
        print(f"🔗 Connecting to database '{self.db_name}'...")
        time.sleep(1)  # simulate connection delay
        print(f"✅ Connected to database '{self.db_name}' successfully!")

    def query(self, sql):
        """Simulate running an SQL query"""
        print(f"💾 Executing query on {self.db_name}: {sql}")

    def __del__(self):
        """Destructor — automatically close connection and log the closing time"""
        print(f"❌ Closing connection to '{self.db_name}'...")
        time.sleep(1)
        closing_time = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        with open("db_log.txt", "a") as log_file:
            log_file.write(f"[{closing_time}] Closed connection to {self.db_name}\n")
        print(f"🕒 Connection to '{self.db_name}' closed and logged at {closing_time}.")


# Main Program
def main():
    print("===== 🗄️ Database Connection Simulation =====")
    db = DatabaseConnection("StudentDB")

    # Simulate some operations
    db.query("SELECT * FROM students;")
    db.query("UPDATE students SET grade='A' WHERE id=101;")

    print("Program ending... connection will close automatically.")

if __name__ == "__main__":
    main()
