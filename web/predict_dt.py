import sys
import csv
import pandas as pd
import numpy as np
from sklearn import tree
from sklearn import preprocessing
from joblib import dump, load

# predict
year = int(sys.argv[1])
month = int(sys.argv[2])
week = int(sys.argv[3])
day = int(sys.argv[4])
animal_type = sys.argv[5]
color = sys.argv[6]
sex = sys.argv[7]
sex_outcome = sys.argv[8]
dominant_breed = sys.argv[9]

age = year*365+month*30+week*7+day

d = [{'age_upon_outcome':age,'animal_type':animal_type,'color':color,'sex':sex,
     'sex_outcome':sex_outcome,'dominant_breed':dominant_breed}]

predict_df = pd.DataFrame(d)


encoder = preprocessing.LabelEncoder()
idx = 1
for column_name in predict_df.columns:
        if column_name == 'age_upon_outcome':
            continue
        elif predict_df[column_name].dtype == object:
            encoder.classes_= np.load('classes_'+column_name+'.npy')
            encoder_list = encoder.classes_.tolist()
            predict_df.iloc[0,idx] = encoder_list.index(predict_df.iloc[0,idx])
            idx = idx + 1
        else:
            continue

clf = load('decision_tree.joblib')
print(clf.predict(predict_df)[0]) 
