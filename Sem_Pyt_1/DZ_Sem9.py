# #avg = 375000.0
# #import pandas as pd

# #df = pd.read_csv('california_housing_train.csv')
# #avg = df[(df['population'] > 0) & (df['population'] < 500)]['median_house_value'].mean() 
# ****************************************************************************************************************
# import pandas as pd
# df = pd.read_csv('california_housing_train.csv')
# max_households_in_min_population = df[df.population == df['population'].min()] ['households'].max()



# import pandas as pd

# df = pd.read_csv('california_housing_train.csv')
# # Найти минимальное значение 'population'
# min_population = df['population'].min()

# # Отфильтровать строки с минимальным значением 'population' и найти максимальное значение 'households'
# max_households_in_min_population = df[df['population'] == min_population]['households'].max()

