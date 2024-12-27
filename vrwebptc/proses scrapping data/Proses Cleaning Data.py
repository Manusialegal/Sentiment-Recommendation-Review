import re

# Program untuk merapikan data dari file yang hanya ada di 1 baris

def process_raw_data(input_file, output_file):
    try:
        # Membaca file input
        with open(input_file, 'r', encoding='utf-8') as file:
            data = file.read()

        # Operasi pemrosesan untuk merapikan data
        processed_data = data.replace("><", ">\n<")

        # Menulis hasil ke file output
        with open(output_file, 'w', encoding='utf-8') as file:
            file.write(processed_data)

        print(f"Data telah diproses dan disimpan di '{output_file}'.")
    except Exception as e:
        print(f"Terjadi kesalahan: {e}")

# Path file input dan output
input_file_path = "data raw\data_scrapping_siadjirah.txt"
output_file_path = "data clean\data_scrapping_cleaned_siadjirah.txt"

# Memproses data
process_raw_data(input_file_path, output_file_path)
