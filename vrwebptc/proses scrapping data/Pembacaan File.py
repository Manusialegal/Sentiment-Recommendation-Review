# Program untuk membaca data scrapping yang telah dirapikan
import re

# Fungsi untuk membaca data dari file
def baca_data_scrapping(file_path):
    with open(file_path, 'r', encoding='utf-8') as file:
        data = file.read()
    return data

# Fungsi untuk memproses data dan mengambil informasi penting
def proses_data(data):
    # Mencari nama reviewer
    nama_reviewer = re.findall(r'aria-label="([A-Za-z\s]+)" data-review-id', data)
    # Mencari jumlah bintang
    jumlah_bintang = re.findall(r'aria-label="(\d) bintang"', data)
    # Mencari ulasan teks
    ulasan_teks = re.findall(r'<span class="wiI7pd">(.*?)</span>', data, re.DOTALL)
    
    # Membersihkan teks ulasan
    ulasan_teks_bersih = [ulasan.replace('\n', '').strip() for ulasan in ulasan_teks]
    
    return list(zip(nama_reviewer, jumlah_bintang, ulasan_teks_bersih))

# Fungsi utama untuk membaca dan mencetak data
def main():
    # Ganti dengan path file Anda
    file_path = 'data clean\data_scrapping_cleaned_siadjirah.txt'
    
    # Membaca data
    data = baca_data_scrapping(file_path)
    
    # Memproses data
    informasi = proses_data(data)
    
    # Menampilkan informasi
    for idx, (nama, bintang, ulasan) in enumerate(informasi, 1):
        print(f"{idx}. Nama: {nama}\n   Bintang: {bintang}\n   Ulasan: {ulasan}\n")

# Menjalankan program
if __name__ == "__main__":
    main()
