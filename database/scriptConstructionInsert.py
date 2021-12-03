#pip3 install lxml
#from lxml import html
import requests
from bs4 import BeautifulSoup
import os

def setup():
    os.remove('memoire.txt')
    a = open("memoire.txt", "x")
    os.remove('lien.txt')
    b = open("lien.txt", "x")
    os.remove("kit.txt")
    c = open("kit.txt", "x")
    print('fichiers memoire et lien supprime')
    a.close()
    b.close()
    c.close()
    print('fichiers memoire et lien creer')

def etudPage(url,affichage, fic1,fic2):
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
    ouvertFermer = True
    href = False
    sautLigne=False
    baliseImg = True
    #parcours de l'ensemble du tableau de string
    for ligne in tableau:
         # a_append / x_create file / w_write in file
         f = open(fic1, "a")
         lien = open(fic2, "w")
         #pour chaque ligne de l'HTML
         for element in range(len(ligne)):

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
             elif ouvertFermer:
                 f.write(ligne[element])
             #recuperer les liens
             elif ligne[element] == '"' and ligne[element+1] == 'h' and ligne[element+2] == 't':
                 href = True
                 pass
             elif ligne[element] == '"':
                 href = False
                 pass


             # ecrire les liens
             elif href and baliseImg:
                 lien.write(ligne[element])
                 sautLigne = True
             elif sautLigne:
                 lien.write("\n")
                 etudDirect(fic3,fic4)
                 sautLigne = False
    lien.write("#\n")
    f.write('-----------------------------------------------')
    f.close()
    lien.close()
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

def etudDirect(fic1,fic2):
    lien = open("lien.txt", "r")
    url = lien.readlines()
    print(url)
    etudPage(url[-1],False,fic1,fic2)

def lancement(url,fic1,fic2):
    #supprime les fichiers et les recreer
    setup()
    #avoir le rendu de la page et l'affichage dans le terminal
    etudPage(url,False,fic1,fic2)



#instanciation du lien
url = 'https://sauveteurdudunkerquois.fr/tableau-d-honneur/'
fic1 = "memoire.txt"
fic2 = "lien.txt"
fic3 = "kit.txt"
fic4 = "trash.txt"
lancement(url,fic1,fic2)
