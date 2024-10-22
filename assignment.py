import math

# get diameter from user
diameter = float(input("Enter the diameter of your circle in centimeters: "))

# calculate radius
radius = diameter / 2

# calculate area and circumference
area = math.pi * (radius ** 2)
circumference = 2 * math.pi * radius

# display results
print("The area of your circle is:", area)
print("The circumference of your circle is:", circumference)