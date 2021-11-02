import 'package:flutter/material.dart';


class SliderModel{

  String imageAssetPath;
  String title;
  String desc;

  SliderModel({this.imageAssetPath="assets/image1.png",this.title="title",this.desc="description"});

  void setImageAssetPath(String getImageAssetPath){
    imageAssetPath = getImageAssetPath;
  }

  void setTitle(String getTitle){
    title = getTitle;
  }

  void setDesc(String getDesc){
    desc = getDesc;
  }

  String getImageAssetPath(){
    return imageAssetPath;
  }

  String getTitle(){
    return title;
  }

  String getDesc(){
    return desc;
  }

}


List<SliderModel> getSlides(){

  List<SliderModel> slides = [];
  SliderModel sliderModel = new SliderModel();

  //1
  sliderModel.setDesc('"Yoga is the journey of the self, through the self, to the self." -- The Bhagavad Gita');
  sliderModel.setTitle("Yoga Surge");
  sliderModel.setImageAssetPath("assets/page1.png");
  slides.add(sliderModel);

  sliderModel = new SliderModel();

  //2
  sliderModel.setDesc('"Lets Go in hardest Asana"');
  sliderModel.setTitle("Healthy Freak Exercise");
  sliderModel.setImageAssetPath("assets/page2.png");
  slides.add(sliderModel);

  sliderModel = new SliderModel();

  //3
  sliderModel.setDesc('"You cannot always control what goes on outside. But you can always control what goes on inside.."');
  sliderModel.setTitle("Cycling");
  sliderModel.setImageAssetPath("assets/page3.png");
  slides.add(sliderModel);

  sliderModel = new SliderModel();

  //4
  sliderModel.setDesc('"Inhale the future, exhale the past."');
  sliderModel.setTitle("Meditation");
  sliderModel.setImageAssetPath("assets/page4.png");
  slides.add(sliderModel);

  sliderModel = new SliderModel();

  return slides;
}