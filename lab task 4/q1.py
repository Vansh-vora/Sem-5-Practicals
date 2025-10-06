# Create a class paper with width and height as data Member. Create function outside a class that   find   out area and perimeter of that paper Pass object as 
# argument.area=weight*height, perimeter=2+width+height

# Define the Paper class
class Paper:
    def __init__(self, width, height):
        self.width = width
        self.height = height


# Function OUTSIDE the class to calculate area and perimeter
def calculate(paper_obj):
    # Calculate area and perimeter using object attributes
    area = paper_obj.width * paper_obj.height
    perimeter = 2 * (paper_obj.width + paper_obj.height)

    # Display results
    print(f"📏 Width: {paper_obj.width}")
    print(f"📐 Height: {paper_obj.height}")
    print(f"🟩 Area: {area}")
    print(f"🔷 Perimeter: {perimeter}")


# Example usage
if __name__ == "__main__":
    # Create object of Paper
    p1 = Paper(10, 5)

    # Pass object to function
    calculate(p1)
