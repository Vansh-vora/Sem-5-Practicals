#Write a FileMerger utility that merges multiple files into one. Use try…
# finally to ensure that all opened files close correctly even if an error occurs
# mid-process.

class FileMerger:
    def __init__(self, output_file):
        self.output_file = output_file

    def merge_files(self, input_files):
        output = None
        input_file_objects = []

        try:
            # Open output file for writing
            output = open(self.output_file, 'w')

            # Open all input files
            for file_name in input_files:
                try:
                    f = open(file_name, 'r')
                    input_file_objects.append(f)
                    # Read and write contents
                    output.write(f"\n--- Contents of {file_name} ---\n")
                    output.write(f.read())
                    output.write("\n")
                except FileNotFoundError:
                    print(f"❌ File not found: {file_name}")
                except Exception as e:
                    print(f"⚠️ Error reading {file_name}: {e}")

            print(f"✅ All files merged successfully into '{self.output_file}'")

        except Exception as e:
            print(f"❌ Error during merge: {e}")

        finally:
            # Ensure all files are closed even if an error occurs
            if output:
                output.close()
            for f in input_file_objects:
                f.close()
            print("📁 All opened files closed properly.")


# Example usage
if __name__ == "__main__":
    files_to_merge = ["file1.txt", "file2.txt", "file3.txt"]
    merger = FileMerger("merged_output.txt")
    merger.merge_files(files_to_merge)
