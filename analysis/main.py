import nltk.classify.util
from nltk.classify import NaiveBayesClassifier
from nltk.corpus import names
import pandas as pd
from nltk.corpus import stopwords 
from nltk.tokenize import word_tokenize 
stop_words = set(stopwords.words('english'))

#helper functions
#function to format dataset
def word_feats(words):
    return dict([(word, True) for word in words])

#function to take input stop-word,stemming
def take_input():
    sentence = input()
    sentence = sentence.lower()

    #tokenization
    word_tokens = word_tokenize(sentence)

    #stopword filtering
    words = [w for w in word_tokens if not w in stop_words] 
    
    return words

#function to predict 
def predict(words):
    neg = 0
    pos = 0
    for word in words:
        classResult = classifier.classify(word_feats(word))
        if classResult == 'neg':
            print("negative "+word)
            neg = neg + 1
        if classResult == 'pos':
            print("positive "+word)
            pos = pos + 1
    try:
        pos=str(float(pos)/len(words))
        neg=str(float(neg)/len(words))
    except:
        pos=1
        neg=0
    
    #print('Positive: ' + pos)
    #print('Negative: ' + neg)

    print({'pos':pos,'neg':neg})


#loading datsets
positive_data=pd.read_csv("datasets/good-words.txt").abound.tolist()

negative_data=pd.read_csv("datasets/bad-words.csv").jigaboo.tolist()
negative_data=negative_data+pd.read_csv("datasets/en.csv").words.tolist()

#feature extraction
negative_features = [(word_feats(neg), 'neg') for neg in negative_data]
positive_features = [(word_feats(pos), 'pos') for pos in positive_data]

#training
train_set = negative_features + positive_features

#clasifier
classifier = NaiveBayesClassifier.train(train_set)


#prediction
while True:
    print("input")
    predict(take_input())


