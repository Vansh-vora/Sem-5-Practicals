#Create a program that uses the with statement to encrypt and decrypt a text file
# using a simple cipher. Handle errors if the file is missing or unreadable.

class FileEncryptor:
    def __init__(self, shift=3):
        # Simple Caesar Cipher Shift
        self.shift = shift

    def encrypt_file(self, input_file, output_file):
        """Encrypts the content of input_file and saves to output_file."""
        try:
            with open(input_file, 'r') as infile:
                text = infile.read()

            encrypted_text = self._encrypt(text)

            with open(output_file, 'w') as outfile:
                outfile.write(encrypted_text)

            print(f"✅ File '{input_file}' encrypted successfully as '{output_file}'")

        except FileNotFoundError:
            print(f"❌ Error: The file '{input_file}' was not found.")
        except PermissionError:
            print(f"⚠️ Error: You don't have permission to read '{input_file}'.")
        except Exception as e:
            print(f"⚠️ Unexpected error: {e}")

    def decrypt_file(self, input_file, output_file):
        """Decrypts the content of input_file and saves to output_file."""
        try:
            with open(input_file, 'r') as infile:
                encrypted_text = infile.read()

            decrypted_text = self._decrypt(encrypted_text)

            with open(output_file, 'w') as outfile:
                outfile.write(decrypted_text)

            print(f"✅ File '{input_file}' decrypted successfully as '{output_file}'")

        except FileNotFoundError:
            print(f"❌ Error: The file '{input_file}' was not found.")
        except PermissionError:
            print(f"⚠️ Error: You don't have permission to read '{input_file}'.")
        except Exception as e:
            print(f"⚠️ Unexpected error: {e}")

    # ----- Private helper methods -----
    def _encrypt(self, text):
        """Encrypts text using a Caesar cipher."""
        result = ""
        for char in text:
            if char.isalpha():
                shift_base = 65 if char.isupper() else 97
                result += chr((ord(char) - shift_base + self.shift) % 26 + shift_base)
            else:
                result += char
        return result

    def _decrypt(self, text):
        """Decrypts text using a Caesar cipher."""
        result = ""
        for char in text:
            if char.isalpha():
                shift_base = 65 if char.isupper() else 97
                result += chr((ord(char) - shift_base - self.shift) % 26 + shift_base)
            else:
                result += char
        return result


# Example usage
if __name__ == "__main__":
    encryptor = FileEncryptor(shift=4)  # you can change shift key

    # Encrypting a file
    encryptor.encrypt_file("message.txt", "encrypted.txt")

    # Decrypting it back
    encryptor.decrypt_file("encrypted.txt", "decrypted.txt")
