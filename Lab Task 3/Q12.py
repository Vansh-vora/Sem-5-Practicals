#Write a Python program using lambda to filter all even numbers from a given list.
nums=[1,2,3,4,5,6,7]
even=list(filter(lambda x:x%2==0,nums))
print(even)