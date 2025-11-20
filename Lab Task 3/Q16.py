#Write a program that uses a lambda function and *args together to multiply all given
#numbers by 2.
multi=lambda *nums: [n * 2 for n in nums]

print(multi(2,3,4,5))