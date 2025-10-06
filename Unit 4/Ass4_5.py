#Create a Media base class and a Movie subclass with additional attributes such
# as genre and rating. Add a method to recommend a movie based on rating and
# genre.

# Base class
class Media:
    def __init__(self, title, year):
        self.title = title
        self.year = year

    def get_title(self):
        return self.title

    def get_year(self):
        return self.year

    def display_info(self):
        print(f"Title: {self.title} ({self.year})")


# Subclass: Movie inherits from Media
class Movie(Media):
    def __init__(self, title, year, genre, rating):
        super().__init__(title, year)  # call parent constructor
        self.genre = genre
        self.rating = rating  # rating out of 10

    def get_genre(self):
        return self.genre

    def get_rating(self):
        return self.rating

    def display_info(self):
        super().display_info()
        print(f"Genre: {self.genre}")
        print(f"Rating: {self.rating}/10")

    @staticmethod
    def recommend(movies, preferred_genre):
        """Recommend highest-rated movie in given genre"""
        same_genre = [m for m in movies if m.get_genre().lower() == preferred_genre.lower()]
        if not same_genre:
            print(f"⚠️ No movies found in genre '{preferred_genre}'.")
            return
        best_movie = max(same_genre, key=lambda m: m.get_rating())
        print(f"\n🎯 Recommended Movie in '{preferred_genre.title()}' genre:")
        best_movie.display_info()


# Main function
def main():
    print("===== 🎬 Movie Recommendation System =====")
    movies = []

    # Take user input for movies
    while True:
        choice = input("\nDo you want to add a movie? (yes/no): ").lower()
        if choice == "no":
            break

        title = input("Enter movie title: ")
        year = input("Enter release year: ")
        genre = input("Enter genre: ")
        rating = float(input("Enter rating (out of 10): "))

        movie = Movie(title, year, genre, rating)
        movies.append(movie)
        print(f"✅ Movie '{title}' added successfully!")

    # Display all movies
    if not movies:
        print("\nNo movies added. Exiting program.")
        return

    print("\n🎞️ Movie List:")
    for i, m in enumerate(movies, start=1):
        print(f"\n{i}.")
        m.display_info()

    # Recommendation feature
    genre_choice = input("\nEnter a genre to get a recommendation: ")
    Movie.recommend(movies, genre_choice)


if __name__ == "__main__":
    main()

