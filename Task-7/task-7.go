package main

import (
	"encoding/csv"
	"log"
	"os"
)

var data = [][]string{{"SL.NO.", "NAME", "NET WORTH", "AGE", "COUNTRY", "SOURCE OF IMCOME"},
	{"1", "ELON MUSK", "$292.6 B", "50", "UNITED STATES", "TESLA & SPACEX"}, {"2", "JEFF BEZOS", "$195.9 B", "57", "UNITED STATES", "AMAZON"},
	{"3", "BERNARD ARNAULT & FAMILY", "$189.1 B", "72", "FRANCE", "LVMH"}, {"4", "BILL GATES", "$137.4 B", "66", "UNITED STATES", "MICROSOFT"},
	{"5", "LARRY ELLISON", "$130 B", "77", "UNITED STATES", "SOFTWARE"}, {"6", "LARRY PAGE", "$126.2 B", "48", "UNITED STATES", "GOOGLE"},
	{"7", "SERGEY BIN", "$121.6 B", "48", "UNITED STATES", "GOOGLE"}, {"8", "MARK ZUCKERBERG", "$115.8 B", "37", "UNITED STATES", "FACEBOOK"},
	{"9", "STEVE BALLMER", "$104.6 B", "65", "UNITED STATES", "MICROSOFT"}, {"10", "WARREN BUFFET", "$104.4 B", "91", "UNITED STATES", "BERKSHIRE HATHAWAY"}}

func main() {
	file, err := os.Create("task-7.csv")
	checkError("Cannot create file", err)
	defer file.Close()

	writer := csv.NewWriter(file)
	defer writer.Flush()

	for _, value := range data {
		err := writer.Write(value)
		checkError("Cannot write to file", err)
	}
}

func checkError(message string, err error) {
	if err != nil {
		log.Fatal(message, err)
	}
}
