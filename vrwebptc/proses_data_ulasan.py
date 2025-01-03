# -*- coding: utf-8 -*-
"""Proses data ulasan.ipynb

Automatically generated by Colab.

Original file is located at
    https://colab.research.google.com/drive/16haLOhSTs_MwuGsgcoznCba_EBab2MbE
"""

!pip install pandas openpyxl textblob scikit-learn
!python -m textblob.download_corpora
import nltk
nltk.download('popular')
import pandas as pd
from textblob import TextBlob

def get_sentiment(text):
    polarity = TextBlob(text).sentiment.polarity
    if polarity > 0:
        return "Positif"
    elif polarity < 0:
        return "Negatif"
    else:
        return "Netral"

def identify_topic(text):
    topics = {
        'Morning': ['morning', 'breakfast'],
        'Afternoon': ['afternoon', 'midday', 'lunch time', 'early afternoon', '2 PM', '3 PM'],
        'Evening': ['evening', 'dusk', 'sunset', 'nightfall', 'after dinner'],
        'Night': ['night', 'late night', 'midnight', 'early hours', '12 AM', '1 AM'],
        'Alone': ['alone', 'by myself', 'solo', 'individual', 'just me'],
        'Duo': ['family', 'couple', 'pair', 'two of us', 'small family'],
        'Group': ['friends', 'friends', 'gang', 'team', 'crowd', 'large party'],
        'Chill': ['chill', 'relax', 'unwind', 'hang out', 'cool', 'calm'],
        'Working': ['working', 'remote work', 'study', 'laptop', 'focused', 'productive', 'business'],
        'Coffee': ['coffee', 'espresso', 'latte', 'cappuccino', 'americano', 'brew', 'black coffee', 'iced coffee', 'mocha', 'macchiato'],
        'Beverages': ['beverages', 'drinks', 'juice', 'tea', 'soda', 'milkshake', 'smoothie', 'water', 'hot chocolate'],
        'live music': ['live music', 'band', 'singer', 'concert', 'acoustic', 'performance', 'stage', 'entertainment', 'show', 'DJ'],
        'Food': ['food', 'fried rice', 'french fries', 'rice', 'potato', 'meat', 'meatball', 'chicken', 'burger', 'pizza', 'pasta', 'sandwich', 'dessert', 'cake', 'snack', 'noodle']
    }
    text = text.lower()
    for topic, keywords in topics.items():
        if any(keyword in text for keyword in keywords):
            return topic
    return 'Umum'

file_path = "/content/Database Ulasan Cafe Toko Kopi M.xlsx" #lokasi path file
data = pd.read_excel(file_path)

data['Sentimen'] = data['Teks Ulasan'].apply(get_sentiment)
data['Topik Utama'] = data['Teks Ulasan'].apply(identify_topic)

output_file_path = "Analisis Sentimen Topik Ulasan Cafe Toko Kopi M.xlsx" #nama output file
data.to_excel(output_file_path, index=False)
print(f"Hasil analisis tersimpan di {output_file_path}")