import re
import csv

# Fungsi untuk membaca dan memproses file teks
def process_reviews(input_file, output_file):
    with open(input_file, 'r', encoding='utf-8') as file:
        content = file.read()

    # Pola regex untuk menangkap informasi ulasan
    pattern = re.compile(
        r"""<div class=\"jftiEf fontBodyMedium \" aria-label=\"(?P<name>.*?)\".*?>.*?<span class=\"kvMYJc\" role=\"img\" aria-label=\"(?P<rating>.*?) bintang\">.*?<span class=\"rsqaWe\">(?P<time>.*?)</span>.*?<div class=\"MyEned\".*?lang=\"id\">(?P<review>.*?)</div>""",
        re.DOTALL
    )

    # Menyimpan hasil ekstraksi ke dalam list
    reviews = []

    for match in pattern.finditer(content):
        name = match.group('name').strip()
        rating = match.group('rating').strip()
        time = match.group('time').strip()
        review = re.sub(r'<.*?>', '', match.group('review').strip())  # Menghapus tag HTML dari ulasan
        reviews.append([name, rating, time, review])

    # Menulis data ke file CSV
    with open(output_file, 'w', encoding='utf-8', newline='') as csvfile:
        writer = csv.writer(csvfile)
        writer.writerow(['Name', 'Rating', 'Time', 'Review'])
        writer.writerows(reviews)

    print(f"Data berhasil ditulis ke {output_file}")

# File input dan output
input_file = 'data_scrapping_cleaned2.txt'  # Ganti dengan nama file input Anda
output_file = 'reviews.csv'

# Memproses data
process_reviews(input_file, output_file)
