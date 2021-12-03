#pip3 install lxml
#from lxml import html
import requests
from bs4 import BeautifulSoup
import os
import shutil

def setup():
    try:
        shutil.rmtree('data/')
        os.mkdir('data/')
    except:
        pass

def etudPage(url,affichage):
    #chargement de la page
    r = requests.get(url)

    #etude de la page
    soup = BeautifulSoup(r.content, 'html.parser')
    #selection des informations entre balises
    rows = soup.select('body main')
    if affichage:
        print(rows)

    print("page trouve, balise identifie", end=' ')
    #construire un tableau de string
    tableau = []
    for i in rows:
        tableau.append(str(i))
    print("lancement ecriture")

    ##########################
    ajoutChiffre=False
    ajoutInfo = False
    ajoutLien = False
    ignorer = False
    ##########################


    #parcours de l'ensemble du tableau de string
    a = None
    chiffre = ''
    for ligne in tableau:
         # a_append / x_create file / w_write in file
         #pour chaque ligne de l'HTML
         for element in range(len(ligne)):
             if ligne[element+1]+ligne[element+2] + ligne[element+3]+ligne[element+4]+ligne[element+5]+ligne[element+6] =='</main' :
                 #print(element,ligne[element-3]+ligne[element-2]+ligne[element-1]+ligne[element])
                 break
             if ligne[element-3]+ligne[element-2]+ligne[element-1]+ligne[element] == '<h2>':
                 ajoutChiffre=True
             elif ligne[element] == '<':
                 ajoutChiffre=False
                 chiffre=''
             if ajoutChiffre:
                 chiffre+=ligne[element]

             if ligne[element-2]+ligne[element-1]+ligne[element] == '<p>' :
                 ajoutInfo = True
             elif ligne[element+1]+ligne[element+2] + ligne[element+3]+ligne[element+4] =='</p>' :
                 ajoutInfo = False

             if ajoutInfo and chiffre!='':
                 with open('data/'+chiffre+'.txt', 'w') as f:
                     f.write(chiffre+'\n')


                     if ligne[element-3]+ligne[element-2]+ligne[element-1]+ligne[element] == '<img':
                         ignorer = True
                     elif ligne[element+1]+ligne[element+2] + ligne[element+3]+ligne[element+4] =='</p>' :
                         ignorer = False

                     if ligne[element-3]+ligne[element-2]+ligne[element-1]+ligne[element] == 'ef="':
                         ajoutLien = True
                     elif ligne[element+1]+ligne[element+2] == '/"':
                         ajoutLien = False
                         a.write('\n')

                     if ajoutLien and not ignorer:
                         a.write(ligne[element])

                     ok = False
                     if ligne[element] == '>' :
                         ok=True
                     elif ligne[element] == '<':
                         ok = False
                     elif ok:
                         a.write(ligne[element])


    print("termine")

def etudRecursive():
    lien = open("lien.txt", "r")
    url = lien.readline()
    while url[0] != '#':
        print('#################################')
        print(url)
        try :
            etudPage(url,False)
            url = lien.readline()
        except Exception as e:
            print('\/\/\/\/\/\/\/\/\/\/','\npas possible sur :',url)
            print(e)
            #break
    print('TERMINE')


def constructionInsert():
    lien = open("lien.txt", "a")
    memo = open("memoire.txt", "a")
    commande = open("construction.txt","a")
    while memo.readline() != '':
        pass





    lien.close()
    memo.close()
    commande.close()

def lancement(url):
    #supprime les fichiers et les recreer
    setup()
    #avoir le rendu de la page et l'affichage dans le terminal
    etudPage(url,True)
    #etudRecursive()



#instanciation du lien
url = 'https://sauveteurdudunkerquois.fr/18eme-siecle/'

lancement(url)
