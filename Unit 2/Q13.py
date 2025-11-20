#Continuously accept integers until a negative number is entered. Calculate
#sum, average, and count of positive numbers entered.

nums = []
while True:
    x = int(input())
    if x < 0:
        break
    nums.append(x)

if nums:
    print("Sum:", sum(nums))
    print("Avg:", sum(nums)/len(nums))
    print("Count:", len(nums))
