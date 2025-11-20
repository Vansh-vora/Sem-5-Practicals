#Given a list of integers, print the square of even numbers and cube of odd
#numbers using `enumerate()` and list comprehension

lst = list(map(int, input().split()))

result = [x*x if x%2==0 else x*x*x for i,x in enumerate(lst)]
print(result)
