#Create a StudentResult class that calculates grade percentages. Handle
# exceptions if marks entered exceed subject maximums or are negative.
# StudentResult class to calculate grade percentage with exception handling

class InvalidMarksError(Exception):
    """Custom exception for invalid marks"""
    pass

class StudentResult:
    def __init__(self, name, marks, max_marks_per_subject=100):
        self.name = name
        self.marks = marks
        self.max_marks_per_subject = max_marks_per_subject

    def calculate_percentage(self):
        try:
            # Check for invalid marks
            for subject, mark in self.marks.items():
                if mark < 0:
                    raise InvalidMarksError(f"❌ Marks for {subject} cannot be negative.")
                if mark > self.max_marks_per_subject:
                    raise InvalidMarksError(f"❌ Marks for {subject} cannot exceed {self.max_marks_per_subject}.")
            
            total_marks = sum(self.marks.values())
            total_subjects = len(self.marks)
            percentage = (total_marks / (total_subjects * self.max_marks_per_subject)) * 100
            return percentage
        
        except InvalidMarksError as e:
            print(e)
            return None

    def display_result(self):
        percentage = self.calculate_percentage()
        if percentage is not None:
            print(f"\nStudent Name: {self.name}")
            print(f"Percentage: {percentage:.2f}%")
            
            # Determine grade
            if percentage >= 90:
                grade = "A+"
            elif percentage >= 75:
                grade = "A"
            elif percentage >= 60:
                grade = "B"
            elif percentage >= 50:
                grade = "C"
            elif percentage >= 35:
                grade = "D"
            else:
                grade = "F"
            
            print(f"Grade: {grade}")

# Example usage
marks = {
    "Math": 95,
    "Science": 88,
    "English": 76,
    "History": 102  # Invalid marks to trigger exception
}

student = StudentResult("Rahul Sharma", marks)
student.display_result()
