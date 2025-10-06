#Design a SmartDevice class that inherits from both Phone and Camera.
# Handle method name clashes using method resolution order

class Phone:
  def __init__(self,brand):
    self.brand= brand

  def power_on(self):
    return (f"{self.brand} Phone is powering on...")
  def features(self):
    return "Phone features: Calling, Messaging, Internet Browsing"
  
class Camera:
  def __init__(self, resolution):
    self.resolution = resolution

  def power_on(self):
    return (f"Camera with {self.resolution} resolution is powering on...")
  def features(self):
    return "Camera features: Photo Capture, Video Recording, Zoom"
  
class SmartDevice(Phone, Camera):
  def __init__(self, brand, resolution):
    Phone.__init__(self, brand)
    Camera.__init__(self, resolution)

  def features(self):
    print("SmartDevice features include:")
    super().features()
    Camera.features(self)
    print(" - All features of Phone and Camera combined")

def main():
  print("========Smart Device System========")
  brand= input("Enter Phone Brand: ")
  resolution= input("Enter Camera Resolution (e.g., 12MP): ")
  
  device =SmartDevice(brand, resolution)

  print("Powering on the Smart Device...")
  device.power_on()

  print("\nListing Features:")
  device.features()

  print("\nMethod Resolution Order (MRO):")
  for cls in SmartDevice.__mro__:
    print(cls)



if __name__=="__main__":
  main()
  
    