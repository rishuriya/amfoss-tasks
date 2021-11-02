Terminal Command
mkdir Coordinates-Location
cd Coordinates-Location
mkdir North
cd North
touch NDegree.txt
printf '9°'>>NDegree.txt
touch NMinutes.txt
printf '5''>>NMinutes.txt
touch NSeconds.txt
printf '38.1'''>>NSeconds.txt
touch NorthCoordinate.txt
printf '9°'>>NorthCoordinate.txt
printf '5''>>NorthCoordinate.txt
printf '38.1'''>>NorthCoordinate.txt
printf cp NorthCoordinate ../North.txt
cp NorthCoordinate ../North.txt
cd ..
mkdir East
cd East
touch EDegree.txt
printf '76°'>>NDegree.txt
printf '76°'>>EDegree.txt
touch EMinutes.txt
printf '29''>>EMinutes.txt
touch ESeconds.txt
printf '30.8''>>EMinutes.txt
printf '30.8''>>ESeconds.txt
touch EastCoordinate.txt
printf '76°29'30.8'''>>EastCoordinate.txt
cp EastCoordinate.txt ../East.txt
cd ..
touch Coordinate-Location.txt
printf '9°5'38.1'''>>Coordinate-Location.txt
printf '76°29'30.8'''>>Coordinate-Location.txt
cd East
cd ..cd ..mkdir t2cd t2
mkdir Task-2
cd ..cp Coordinate-Location t2/Task-2
cd t2
git init
git add .
git commit -m Mygit remote add origin https://github.com/rishuriya/amfoss-tasks.git
git push -u origin master
