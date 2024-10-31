package com.mygdx.game;

import com.badlogic.gdx.ApplicationAdapter;
import com.badlogic.gdx.Gdx;
import com.badlogic.gdx.Input;
import com.badlogic.gdx.graphics.Texture;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;

import GemeSetting.heroySet;



public class MyGdxGame extends ApplicationAdapter {
	SpriteBatch batch;
	Texture img;
	MainProgram program;
	Texture arbalester, magician, monk, outlaw, peasant, sniper, spearmen;



	@Override
	public void create () {
		batch = new SpriteBatch();
		img = new Texture("ddx.png");

		program = new MainProgram();

		arbalester = new Texture("1.png");
		magician = new Texture("2.png");
		monk = new Texture("3.png");
		outlaw = new Texture("4.png");
		peasant = new Texture("5.png");
		sniper = new Texture("6.png");
		spearmen = new Texture("7.png");

	}

	@Override
	public void render () {
		//ScreenUtils.clear(1, 0, 0, 1);
		batch.begin();
		batch.draw(img, 0, 0, Gdx.graphics.getWidth(),Gdx.graphics.getHeight());

		for (heroySet hero : program.allPersons ){
			if (hero.getHealth() == 0) continue;
			float x = hero.getPosition().getX() * (Gdx.graphics.getWidth() / 11.f);
			float y = hero.getPosition().getY() * (Gdx.graphics.getHeight() / 2.f) / 10.f;
			switch (hero.getClass().getSimpleName()){
				case "arbalester" :
					batch.draw(arbalester,x,y);
				case "magician" :
					batch.draw(magician,x,y);
				case "monk" :
					batch.draw(monk,x,y);
				case "outlaw" :
					batch.draw(outlaw,x,y);
				case "peasant" :
					batch.draw(peasant, x,y);
				case "sniper" :
					batch.draw(sniper,x,y);
				case "spearmen":
					batch.draw(spearmen,x,y);

			}
		}
		batch.end();

		if (Gdx.input.isButtonJustPressed(Input.Buttons.LEFT)){
			program.step();
		}
	}
	
	@Override
	public void dispose () {
		batch.dispose();
		img.dispose();
		arbalester.dispose();
		magician.dispose();
		monk.dispose();
		outlaw.dispose();
		peasant.dispose();
		sniper.dispose();
		spearmen.dispose();
	}
}
