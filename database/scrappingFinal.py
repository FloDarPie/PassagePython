#pip3 install lxml
#from lxml import html
import requests
from bs4 import BeautifulSoup
import os
import shutil

def setup():
    os.remove('kit.txt')
    print('fichiers kit supprime')
    a= open("kit.txt", "x")
    a.close()
    print('fichiers kit creer')
    try:
        shutil.rmtree('data/')
        os.mkdir('data/')
        print('reconstruction des data')
    except Exception as e:
        print('toujours les vieilles datas',e)
        pass

def etudPage(url,affichage,fichier):
    #chargement de la page
    r = requests.get(url)

    #etude de la page
    soup = BeautifulSoup(r.content, 'html.parser')
    #selection des informations entre balises
    rows = soup.select('body p')
    if affichage:
        print(rows)

    print("page trouve, balise identifie", end=' ')
    #construire un tableau de string
    tableau = []
    for i in rows:
        tableau.append(str(i))
    print("lancement ecriture")

    stringLien = ''

    ouvertFermer = True
    href = False
    sautLigne=False
    baliseImg = True
    # a_append / x_create file / w_write in file
    f = open(fichier, "a")
    #parcours de l'ensemble du tableau de string
    for ligne in tableau:

         #pour chaque ligne de l'HTML
         for element in range(len(ligne)):
             if ligne[element] == '<' and ligne[element+1] != 'h' and ligne[element+3] != '>':
                 x=8
                 print(ligne[element+4+x]+ligne[element+5+x] + ligne[element+6+x]+ligne[element+7+x])


             #recuperer les dates
             if ligne[element-4]+ligne[element-3] == '<h' and ligne[element+5] != '<':
                 print(ligne[element+1]+ligne[element+2] + ligne[element+3]+ligne[element+4])
                 f.write(ligne[element+1]+ligne[element+2] + ligne[element+3]+ligne[element+4]+'\n')

             #retirer les balises
             if ligne[element] == '<':
                 ouvertFermer=False

             #detection des balises img
             elif not ouvertFermer and ligne[element]=='i' and ligne[element+1]=='m' and ligne[element+2]=='g':
                 baliseImg = False
             elif ligne[element]=='/' and ligne[element+1]=='i' and ligne[element+2]=='m' and ligne[element+3]=='g':
                 baliseImg = True

             elif ligne[element] == '>':
                 ouvertFermer = True
                 pass
             elif ligne[element] == 'p' and ligne[element+1] == '>':
                 f.write("\n")
                 f.write('######\n')
             elif ouvertFermer:
                 f.write(ligne[element])
             #recuperer les liens
             elif ligne[element] == '"' and ligne[element+1] == 'h' and ligne[element+2] == 't':
                 href = True
                 pass
             elif ligne[element] == '"':
                 href = False
                 f.write('\n'+stringLien+'\n')
                 stringLien = ''
                 pass

             # ecrire les liens
             elif href and baliseImg:
                 stringLien += ligne[element]
                 sautLigne = True

    f.write('ENDDOCC')
    f.close()
    print("termine")

#a ne pas utiliser
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


def nettoyage(fichier):
    print("lancement nettoyage")
    with open(fichier,'r') as feuille:
        carte = open('carte.txt','w')


        ligne = feuille.readline()
        while ligne != 'ENDDOC':
            if ligne[0] != '#' and ligne[0] != '\n' and ligne[0] != ',':
                carte.write(ligne)
                if ligne[-2] !='/':
                    carte.write('#')
            ligne = feuille.readline()
    print("fin nettoyage")

def constructionCarte():
    #balise de creation de fichier
    i=0
    with open('carte.txt','r') as carte:
        ligne = carte.readline()

        #controle final
        while ligne!='#':
            if ligne[0] == '#' and ligne[1] == 'h':
                with open('data/'+str(i)+'.txt','w') as adresse:
                    print('carte',i,'cree')
                    adresse.write(ligne[1:])
                    ceci = carte.readline()
                    adresse.write(ceci)
                    etudPage(ligne[1:],False,'data/'+str(i)+'.txt')
                    nettoyage('data/'+str(i)+'.txt')
                    i+=1
            ligne = carte.readline()





def lancement(url):
    #supprime les fichiers et les recreer
    setup()
    #avoir le rendu de la page et l'affichage dans le terminal
    etudPage(url,False,"kit.txt")
    #nettoyage("kit.txt")
    #constructionCarte()




#instanciation du lien
url = 'https://sauveteurdudunkerquois.fr/1825-1849/'

lancement(url)
