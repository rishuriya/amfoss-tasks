import 'dart:io';
import 'package:flutter_app/data/data.dart';
import 'package:flutter_app/data/main.dart';
import 'package:flutter/material.dart';


void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Home(),
      debugShowCheckedModeBanner: false,
    );
  }
}

class Home extends StatefulWidget {
  @override
  _HomeState createState() => _HomeState();
}

class _HomeState extends State<Home> {

  List<SliderModel> mySLides = [];
  int slideIndex = 0;
  late PageController controller;

  Widget _buildPageIndicator(bool isCurrentPage){//dots
    return Container(
      margin: EdgeInsets.symmetric(horizontal: 2.0),
      height: isCurrentPage ? 10.0 : 6.0,
      width: isCurrentPage ? 10.0 : 6.0,
      decoration: BoxDecoration(
        color: isCurrentPage ? Colors.orangeAccent: Colors.grey[300],
        borderRadius: BorderRadius.circular(12),
      ),
    );
  }

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    mySLides = getSlides();
    controller = new PageController();
  }

  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
          gradient: LinearGradient(
              colors: [const Color(0xff3C8CE7), const Color(0xff00EAFF)])),
      child: Scaffold(
        backgroundColor: Colors.amberAccent,
        body: Container(
          height: MediaQuery.of(context).size.height - 100,
          child: PageView(
            controller: controller,
            onPageChanged: (index) {
              setState(() {
                slideIndex = index;
              });
            },
            children: <Widget>[
              SlideTile(
                imagePath: mySLides[0].getImageAssetPath(),
                title: mySLides[0].getTitle(),
                desc: mySLides[0].getDesc(),
              ),
              SlideTile(
                imagePath: mySLides[1].getImageAssetPath(),
                title: mySLides[1].getTitle(),
                desc: mySLides[1].getDesc(),
              ),
              SlideTile(
                imagePath: mySLides[2].getImageAssetPath(),
                title: mySLides[2].getTitle(),
                desc: mySLides[2].getDesc(),
              ),
              SlideTile(
                imagePath: mySLides[3].getImageAssetPath(),
                title: mySLides[3].getTitle(),
                desc: mySLides[3].getDesc(),
              )
            ],
          ),
        ),
        bottomSheet: slideIndex != 3 ? Container(
          margin: EdgeInsets.symmetric(vertical: 16),
          child: Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: <Widget>[
              FlatButton(
                onPressed: (){
                  controller.animateToPage(3, duration: Duration(milliseconds: 500), curve: Curves.linear);
                },
                splashColor: Colors.blue[50],
                child: Text(
                  "SKIP",
                  style: TextStyle(color: Color(0xFF0074E4), fontWeight: FontWeight.w600),
                ),
              ),
              Container(
                child: Row(
                  children: [
                    for (int i = 0; i <  4; i++) i == slideIndex ? _buildPageIndicator(true): _buildPageIndicator(false),
                  ],),
              ),
              FlatButton(
                onPressed: (){
                  print("this is slideIndex: $slideIndex");
                  controller.animateToPage(slideIndex + 1, duration: Duration(milliseconds: 500), curve: Curves.linear);
                },
                splashColor: Colors.blue[50],
                child: Text(
                  "NEXT",
                  style: TextStyle(color: Color(0xFF0074E4), fontWeight: FontWeight.w600),
                ),
              ),
            ],
          ),
        ): InkWell(
          onTap: (){
            print("Get Started Now");
          },
          child: Container(
            height: Platform.isIOS ? 70 : 60,
            color: Colors.blue,
            alignment: Alignment.center,
            child: ElevatedButton(
              child: const Text('Let`s Start'),
                onPressed: () {
                  Navigator.push(context,
              MaterialPageRoute(builder: (context) => const SecondRoute()),);},
          ),
        ),
      ),
    )
    );
  }
}

class SecondRoute extends StatelessWidget {
  const SecondRoute({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
    child: Scaffold(
      backgroundColor: Colors.grey,
      appBar: AppBar(
        title: const Text("Welcome"),
      ),
      body: Container(
        height: MediaQuery.of(context).size.height -10,
        child: PageView(
            children: <Widget>[
        SlideTile(
        imagePath: "assets/welcome.png",
        title: "Rishav Kumar",
        desc: '"Hey Everyone 🖐🖐! I belong from Bihar, India. Studies in Amrita School of Engineering in EEE department have lot of interest in Programming. This is my First Fluuter App"',
      ),
            ],
        ),
      ),
      )
    );

  }
}

class SlideTile extends StatelessWidget {
  String imagePath, title, desc;

  SlideTile({this.imagePath="assets/image1.png", this.title="title", this.desc='description'});

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 20),
      alignment: Alignment.center,
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: <Widget>[
          Image.asset(imagePath),
          SizedBox(
            height: 30,
            width: 50,
          ),
          Text(title, textAlign: TextAlign.center,style: TextStyle(
              fontWeight: FontWeight.bold,
              fontSize: 25
          ),),
          SizedBox(
            height: 20,
          ),
          Text(desc, textAlign: TextAlign.center,style: TextStyle(
              fontWeight: FontWeight.w500,
              fontStyle: FontStyle.italic,
              fontSize: 17))
        ],
      ),
    );
  }
}