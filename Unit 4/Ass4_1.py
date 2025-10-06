#Create a Hospital system with Doctor, Patient, and Appointment classes. Implement methods to schedule appointments and print a daily appointment list.

from datetime import datetime

# Doctor class
class Doctor:
    def __init__(self, doctor_id, name, specialization):
        self.doctor_id = doctor_id
        self.name = name
        self.specialization = specialization

    def __str__(self):
        return f"Dr. {self.name} ({self.specialization})"


# Patient class
class Patient:
    def __init__(self, patient_id, name, age, gender):
        self.patient_id = patient_id
        self.name = name
        self.age = age
        self.gender = gender

    def __str__(self):
        return f"{self.name}, Age: {self.age}, Gender: {self.gender}"


# Appointment class
class Appointment:
    def __init__(self, doctor, patient, date_time):
        self.doctor = doctor
        self.patient = patient
        self.date_time = date_time

    def __str__(self):
        date_str = self.date_time.strftime("%d-%m-%Y %H:%M")
        return f"Appointment on {date_str} - {self.patient.name} with {self.doctor.name}"


# Hospital System class
class HospitalSystem:
    def __init__(self):
        self.doctors = []
        self.patients = []
        self.appointments = []

    def add_doctor(self):
        doctor_id = len(self.doctors) + 1
        name = input("Enter doctor's name: ")
        specialization = input("Enter specialization: ")
        doctor = Doctor(doctor_id, name, specialization)
        self.doctors.append(doctor)
        print(f" Doctor added: {doctor}\n")

    def add_patient(self):
        patient_id = len(self.patients) + 1
        name = input("Enter patient name: ")
        age = int(input("Enter patient age: "))
        gender = input("Enter gender (Male/Female): ")
        patient = Patient(patient_id, name, age, gender)
        self.patients.append(patient)
        print(f" Patient added: {patient}\n")

    def schedule_appointment(self):
        if not self.doctors or not self.patients:
            print(" Please add doctors and patients first.\n")
            return

        print("\nAvailable Doctors:")
        for d in self.doctors:
            print(f"{d.doctor_id}. {d.name} ({d.specialization})")

        doctor_id = int(input("Choose doctor ID: "))
        doctor = next((d for d in self.doctors if d.doctor_id == doctor_id), None)
        if not doctor:
            print(" Invalid doctor ID.")
            return

        print("\nRegistered Patients:")
        for p in self.patients:
            print(f"{p.patient_id}. {p.name}, Age: {p.age}")

        patient_id = int(input("Choose patient ID: "))
        patient = next((p for p in self.patients if p.patient_id == patient_id), None)
        if not patient:
            print(" Invalid patient ID.")
            return

        date_str = input("Enter appointment date and time (DD-MM-YYYY HH:MM): ")
        date_time = datetime.strptime(date_str, "%d-%m-%Y %H:%M")

        # Check for conflict
        for appt in self.appointments:
            if appt.doctor == doctor and appt.date_time == date_time:
                print(f" Dr. {doctor.name} is not available at that time!")
                return

        new_appt = Appointment(doctor, patient, date_time)
        self.appointments.append(new_appt)
        print(f" Appointment scheduled successfully: {new_appt}\n")

    def print_daily_appointments(self):
        if not self.appointments:
            print("No appointments scheduled yet.\n")
            return
        date_str = input("Enter date to view appointments (DD-MM-YYYY): ")
        date = datetime.strptime(date_str, "%d-%m-%Y")

        print(f"\n Appointments for {date.strftime('%d-%m-%Y')}:")
        daily_appts = [a for a in self.appointments if a.date_time.date() == date.date()]
        if not daily_appts:
            print("No appointments found for this date.\n")
            return

        for appt in sorted(daily_appts, key=lambda x: x.date_time):
            print(f" - {appt.date_time.strftime('%H:%M')} | {appt.patient.name} with Dr. {appt.doctor.name}")
        print()


# Main menu-driven system
def main():
    hospital = HospitalSystem()

    while True:
        print("===== Hospital Management System =====")
        print("1. Add Doctor")
        print("2. Add Patient")
        print("3. Schedule Appointment")
        print("4. View Daily Appointments")
        print("5. Exit")
        choice = input("Enter your choice: ")

        if choice == "1":
            hospital.add_doctor()
        elif choice == "2":
            hospital.add_patient()
        elif choice == "3":
            hospital.schedule_appointment()
        elif choice == "4":
            hospital.print_daily_appointments()
        elif choice == "5":
            print(" Exiting the system. Goodbye!")
            break
        else:
            print(" Invalid choice! Please try again.\n")


if __name__ == "__main__":
    main()
