#Create a dictionary of city names and temperatures. Remove all cities with
# temperature < 15°C or > 40°C, and display the cleaned dictionary.

cities = {"Delhi":42, "Shimla":12, "Mumbai":33, "Jaipur":44, "Goa":28}
cleaned = {c:t for c,t in cities.items() if 15 <= t <= 40}
print(cleaned)
