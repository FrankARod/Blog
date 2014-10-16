<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->delete();
		DB::table('posts')->delete();		

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}
}

class UserTableSeeder extends Seeder
{
	public function run()
	{

		$user = new User();
		$user->email = 'frank.aaron.rodriguez@gmail.com';
		$user->password = '.9%80)uDkb%tr|4J(04m';
		$user->first_name = 'Frank';
		$user->last_name = 'Rodriguez';
		$user->save();
	}
}

class PostTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post();
		$post->title = "This is the most public yet of my many humiliations. Yes, it's from one of his stand ups.";
		$post->content = "Jackie Chiles: This is the most public yet of my many humiliations. Yes, it's from one of his stand ups. Newman: Tuesday has no feel. Monday has a feel. Friday has a feel. Sunday has a feel.

Jerry: Six years I’ve had this t-shirt. It’s my best one. I call him Golden Boy. George: If Relationship George walks through this door, he will kill Independent George. A George, divided against itself, cannot stand.

Jerry: A blind date. They call it a setup, now. I guess the blind people don't like being associated with all those losers. Puddy: I painted my face. Elaine: You painted your face? Puddy: Yeah. Elaine: Why? Puddy: Well, you know, support the team. Jerry: The New York Yankees? George: The New York Yankees! Jerry: Ruth, Gehrig, DiMaggio, Mantle… Costanza. Policeman: Well, we'll look into it and, uh, we'll let you know if we find anything. Jerry: Do you ever find anything? Policeman: No. Mickey: It’s 100% cotton, and some wool. Jerry: You're going on Regis & Kathy Lee? I'll loan you my puffy shirt. Newman: Hawaii... The most sought-after postal route of them all. The air is so dewy-sweet you don't even have to lick the stamps. Jerry : I'll tell you what the big advantage of homosexuality is. If you're going out with someone your size, you double your wardrobe.

George: You know, if you take everything I've done in my entire life and condense it down into one day, it looks decent. Jerry: The New York Yankees? George: The New York Yankees! Jerry: Ruth, Gehrig, DiMaggio, Mantle... Costanza? Jerry: But the thing you don't realize is that there's good naked and bad naked. Naked hair brushing, good; naked crouching, bad. Elaine: I'm not a lesbian. I hate men, but I'm not a lesbian. George: For me to ask a woman out, I've got to get into a mental state like the karate guys before they break the bricks. Newman: Jerry, I’m a little offended. Jerry: You’re not a little anything, Newman. George [about his father]: During that period when my folks were separated, he went a little crazy. Jerry: They always remember the first time. George: I don't want to be remembered. I want to be forgotten.

George:Parking at a garage is like going to a prostitute. Why pay for it if you can apply yourself and then maybe you can get it for free. George: For I am Costanza, Lord of the Idiots., George: The sea was angry that day, my friends. Like an old man trying to send back soup in a deli! George: She's got a little Marissa Tomei thing goin' on. Jerry: Ah, too bad you've got a little George Costanza thing goin' on. Jerry: You sure have a lot of friends. How come I never see any of these people? Kramer: They want to know why they never see you. George: Yeah, well, the jerk store called, they're running out of you. Jerry: There's very little advice in men's magazines. Women want to learn. Men think 'I know what I'm doing, just show me somebody naked. Jerry: A leg man? Why would I be a leg man? I don't need legs. I have legs. George: If they don’t notice it, what’s the point? Jerry: So you don’t make it a habit of giving to the blind? George: Not bills. Newman: Well, I wouldn't hear of it. I said 'Nice try, Granny,' and I sent her to the back of the line.";
		$post->image = '/img/upload/costanza.jpg';
		$post->user_id = 1;
		$post->save();

		$post2 = new Post();
		$post2->title = "If Relationship George walks through this door, he will kill Independent George. A George, divided against itself, cannot stand!";
		$post2->content = "George: If Relationship George walks through this door, he will kill Independent George. A George, divided against itself, cannot stand!, \"Kramer: The library investigator's name is actually Bookman? That's amazing. That's like an ice cream man named Cone. .\" George: I don't mind a cemetery. In fact, now I see why people like golf. It's just nice to be outside in a well landscaped area. Newman: Vile weed! Gary: I've been living a lie. George: Just one? I'm living like twenty. George: I can't believe you're bringing in an extra bed for a woman that wants to sleep with you. Why don't you bring in an extra guy too. Jerry: You know, George, they're doing wonderful things at mental institutions these days. I'd be happy to set up a meet and greet. George: Hey, I work for Kruger Industrial Smoothing, we don't care... and it shows.

Elaine: [whispering] When did you get a maid? Jerry: You don’t have to whisper, she knows she’s a maid. Jerry: People snap out of that Christmas spirit like it was a drunken stupor? Jerry [to Kramer]: You? You'll be out before we get the check. The Soup Nazi: Come back one year. Next!, George: If they don't notice it, what's the point? Jerry: So you don't make it a habit of giving to the blind? George: Not bills. There are some that are taken from his stand-ups. Jerry: You want me to take an overview? I see a very cheap man holding a sweater trying to get away with something. That's my overview.

Jerry: Men don't care what's on TV. They only care what else is on TV. Newman: Too many people got their mail. Close to 80%. Nobody's ever cracked the 50% barrier. George: I don't think I'm special. My mother always said I'm not special. George: Are you crazy? This is like discovering plutonium, by accident! Jerry: Is someone there? Mr. Marbles. Jerry: Let me ask you a question. If you named a kid Rasputin do you think that would have a negative effect on his life. Kramer: Well, people kept ringing the bell!, By the way, celebrates its second birthday today. Elaine: The female body is a work of art. The male body is utilitarian. It's for gettin' around. It's like a Jeep. , George: I don't have a spare set. All my keys say 'do not duplicate.

Latvian orthodox: What aspect of the faith do you find particularly attractive? George: I think the hats? George: I know the D is the biggest. I've based my whole life on knowing that the D is the biggest. George: I’m a great quitter. I come from a long line of quitters. I was raised to give up. Morty Seinfeld: How could you spend $200 on a tip calculator? George: I don't think I'm special. My mother always said I'm not special.

Elaine: You know, it's not fair people are seated first-come-first-served. It should be based on who's hungriest. Newman: Alright, pace yourself, 'Cause you're gonna have to do this all day for very little money.";
		$post2->image = '/img/upload/costanza1.jpg';
		$post2->user_id = 1;
		$post2->save();
		
		$post3 = new Post();
		$post3->title = "It's the twirling that dazzles the eye.";
		$post3->content = "Jerry [twirling an umbrella]: It's the twirling that dazzles the eye. Jerry: It's amazing that the amount of news that happens in the world every day always just exactly fits the newspaper. Morty Seinfeld: How could you spend $200 on a tip calculator? George: Pity's very underrated. I like it, its good. George: I got greedy. Flew too close to the sun on wings of pastrami! Jerry: Men don't care what's on TV. They only care what else is on TV! Jerry: The New York Yankees? George: The New York Yankees! Jerry: Ruth, Gehrig, DiMaggio, Mantle… Costanza! George: I think I swallowed a fly! I swallowed a fly! What do I do? What can happen. George: I want to be the one person who doesn't die with dignity. I live my whole life in shame. Why should I die with dignity. Kramer: A gift not enjoyed is like a flower that doesn't blossom.

Jerry: People with guns don't understand. That's why they get guns: too many misunderstandings. Jerry: Is he from the future? Kramer: Now let's push this giant ball of oil out the window? Jerry: I think it's fantastic. I think it's a fantastic idea. Jerry: I don’t get you. Who goes on vacation without a job? What, do you need a break from getting up at 11:00. Kramer: Karate. It's a lifetime pursuit of balance and harmony. Jerry: But with punching and kicking. Jerry: I'm not gay. Not that there's anything wrong with that. Elaine: I will never understand people. Jerry: They're the worst. Jerry: I like the button fly. That is one place on my wardrobe I do not need sharp interlocking metal teeth. It's a mink trap down there.

George: I never tasted a cough medicine I didn't love. , Jerry: I do not like the bank. I've heard the expression 'Laughing all the way to the bank'. I have never seen anyone actually doing it? Babu Bhatt: You bad man! You very bad man! You very lazy bad man. Jerry: People on dates shouldn't even be allowed out in public.

Kramer: You know what they say, 'You don't sell the steak, you sell the sizzle. Kenny Banya [reading]: Why do they call it Ovaltine? The mug is round. The jar is round. They should call it round tine? Ms. Rhode Island: I'm watching my weight. Jerry: I'm watching my height. My doctor doesn't want me to get any taller. Jackie Chiles: That's totally inappropriate. It's lewd, vesivius, salacious, outrageous!--Jerry: Nobody knows what to do. You just close your eyes, you hope for the best. I really think they're happy if you just make an effort. Jerry: It's amazing that the amount of news that happens in the world every day always just exactly fits the newspaper. George: You know what I love? How there's two nuts named after people: Hazel and Filbert. Jerry: They’d pick her up in about ten minutes.

George: I know the D is the biggest. I've based my whole life on knowing that the D is the biggest. Jerry: Why don’t you go out? It’s nice out. Kramer: Oh, no. There’s nothing out there for me.\" George: If my parents had a mantle, I might be a completely different person? Jerry: Are we not human? If we pick, do we not bleed? George: Yes, yes of course. The Pensky file. Ho ho, can’t wait to sink my teeth into that. Wow that Pensky. Well we’ll straighten him out. Newman: You see, my dear, all certified mail is registered… but registered mail is not necessarily certified!";
		$post3->image = '/img/upload/costanza2.jpg';
		$post3->user_id = 1;
		$post3->save();
		
		$post4 = new Post();
		$post4->title = "I will never understand people.";
		$post4->content = "Elaine: I will never understand people. Jerry: They're the worst. Jerry: The whole reason you watch a TV show is because it ends. If I wanted a long, boring story with no point to it, I've got my life. George: All my life, I've wanted to make a great entrance. Jerry: You've made some fine exits? George: Why did I tell her I like her? I have this sick compulsion to tell women how I feel. George: You know, if it was a regular salad I wouldn't have said anything. But you had to have the BIG salad. Jerry: I do not like the bank. I've heard the expression 'Laughing all the way to the bank'. I have never seen anyone actually doing it. Jerry: You know what a good mechanic is worth? You can't compare that to sex. Awesome. Puddy: I painted my face. Elaine: You painted your face? Puddy: Yeah.' Elaine: Why? Puddy: Well, you know, support the team. Jerry: There's very little advice in men's magazines. Women want to learn. Men think 'I know what I'm doing, just show me somebody naked.

Jerry: I don't return fruit. Fruit is a gamble. I know that going in. Jackie Chiles: Jackie's cashin' in on your wretched disfigurement! Estelle Costanza: I go out for a quart of milk, I come home, and find my son treating his body like it was an amusement park. Kramer: Hey, you know what would make a great coffee table book? A coffee table book about coffee tables? Jackie Chiles: This is the most public yet of my many humiliations. Jerry: People who read the tabloids deserve to be lied to. George: This is gonna be my time. Time to taste the fruits and let the juices drip down my chin. I proclaim this: The Summer of George. Jerry: Broccoli? Newman, you wouldn't eat broccoli even if it was deep fried in chocolate sauce. George: I don't think I'm special. My mother always said I'm not special. Jerry: I don't return fruit. Fruit is a gamble. I know that going in! Sidra: And by the way, they’re real and they’re spectacular. J. Chiles: So we got an attractive woman, wearing a bra, no top, walkin' around in broad daylight. She's flouting society's conventions.

Kramer: Jerry, now what you do with your personal life is your business. But when you're on my set, you clean it up mister. Jerry: Introducing 'Lite'. The new way to spell 'Light' but with twenty percent fewer letters. Newman: Well, I wouldn't hear of it. I said 'Nice try, Granny,' and I sent her to the back of the line.

George: It's hard enough to meet a woman you dislike, much less like. George: I'm a great quitter. I come from a long line of quitters. I was raised to give up. George: It's a smart line, and a smart crowd will appreciate it. And I'm not going to dumb it down for some bonehead mass audience. Stan the Caddy: Let's go for the green! You know a good lawyer?, Elaine: You know, it's not fair people are seated first-come-first-served. It should be based on who's hungriest. Jerry: I don’t get you. Who goes on vacation without a job? What, do you need a break from getting up at 11:00? Jerry: People who read the tabloids deserve to be lied to? George [visiting a mental institution]: I should be in a place like this. George: Look at that, a lesbian sighting. They're so fascinating. Why is that? Because they don't want us. You gotta respect that. Jerry: Is it possible they're just having babies to get people to visit them? George: Mr Pensky. I was just working on your file. I was transferring the contents of the file into this flexible accordion-style folder?

There are some that are taken from his stand-ups.; George: Do women know about shrinkage? Jerry: A leg man? Why would I be a leg man? I don't need legs. I have legs! Lloyd Braun: Serenity now, insanity later. Morty Seinfeld: I'll sleep standing up. I'll be fine. They just wake up one morning and go, 'Oh my god, there's a tree inside the house.";
		$post4->image = '/img/upload/costanza3.png';
		$post4->user_id = 1;
		$post4->save();
		
		$post5 = new Post();
		$post5->title = "Introducing 'Lite'. The new way to spell 'Light' but with twenty percent fewer letters. ";
		$post5->content = "Jerry: Introducing 'Lite'. The new way to spell 'Light' but with twenty percent fewer letters. Kramer: The library investigator's name is actually Bookman? That's amazing. That's like an ice cream man named Cone.

Jerry: A leg man? Why would I be a leg man? I don't need legs. I have legs. Mr. Ross: It's a terrible tragedy when parents outlive their children. George: Yes, I agree. I hope my parents go long before I do. Jerry: I don’t return fruit. Fruit is a gamble. I know that going in. George: Hey, I work for Kruger Industrial Smoothing, we don't care... and it shows. Jerry: Looking at cleavage is like looking at the sun. You don't stare at it. You get a sense of it and you look away. bit.ly/9p1mxj.

Elaine: Men can sit through the most pointless, boring movie if there's even the slightest possibility that a woman will take her top off! Kenny Banya [reading]: Why do they call it Ovaltine? The mug is round. The jar is round. They should call it round tine. George: Bald men with no jobs and no money who live with their parents don't approach strange women. Jerry: I'm in the unfortunate position of having to consider other people's feelings. George: I can't face the bubble boy.

Sidra: And by the way, they’re real and they’re spectacular. George: You know, if you take everything I've done in my entire life and condense it down into one day, it looks decent. Newman: Tuesday has no feel. Monday has a feel. Friday has a feel. Sunday has a feel. George: What have I done? My whole plan is depending on Kramer! Have I learned nothing. Blaine: What was bad about The English Patient? Elaine: Only that it sucked?

Jerry [Answering the phone]: If you know what happened in the Mets game don't tell me, I taped it. Hello. Jerry: Do you really want a shower radio? I guess there's no better place to dance than a slick surface next to a glass door. George: Hate the big coarse ‘ha’. Hate those. Jerry: People on dates shouldn't even be allowed out in public. Jerry: Introducing 'Lite'. The new way to spell 'Light' but with twenty percent fewer letters. Jerry: And you want to be my latex salesman? George: Hey, I am not a prude, sweetheart. I swing with the best of them.";
		$post5->image = '/img/upload/costanza4.jpg';
		$post5->user_id = 1;
		$post5->save();
		
		$post6 = new Post();
		$post6->title = "It's like having a circus in my mouth.";
		$post6->content = "Kramer [eating Mackinaw peaches]: It's like having a circus in my mouth. Kramer: Well, it all sounds pretty glamourous, but it's business as usual at Kramerica. Kramer: Well, people kept ringing the bell! Jerry: Do you really want a shower radio? I guess there's no better place to dance than a slick surface next to a glass door?

George: It's hard enough to meet a woman you dislike, much less like. Elaine: Nobody takes better care of their hair than me. You can serve dinner on my head. Jerry: That is one magic loogie. George: Look, Jerry let's face it. I've always been handicapped. I'm just now getting the recognition for it.

George: That's my only suit, cost me 350 dollars. I got it at Moe Ginsburg. No wait, you can't just leave me here... Will I see you again. Jerry: Let me just finish my coffee, and then we'll go watch them cut the fat bastard up. Elaine: There's nothing more sophisticated than diddling the maid and then chewing some gum.

George: This is gonna be my time. Time to taste the fruits and let the juices drip down my chin. I proclaim this: The Summer of George. Elaine: I know Jerry. He's not a Nazi. No. He's just neat. Kramer: Now let's push this giant ball of oil out the window.\" George: That's my only suit, cost me 350 dollars. I got it at Moe Ginsburg. No wait, you can\'t just leave me here... Will I see you again. Jerry: Oh, it’s ‘Risk'. It’s a game of world domination being played by two guys who can barely run their own lives. George: I like to just be able to take the blankets and swish them and swirl them, you know what I mean. Jerry: Elaine, have you ever gone out with a bald man? Elaine: No. Jerry: You know what that makes you? A baldist. Jerry: I don’t return fruit. Fruit is a gamble. I know that going in.

Kramer: Well, it all sounds pretty glamourous, but it's business as usual at Kramerica. George: I don't think I've ever been to an appointment in my life where I wanted the other guy to show up. Newman: Tuesday has no feel. Monday has a feel. Friday has a feel. Sunday has a feel.";
		$post6->image = '/img/upload/costanza5.jpg';
		$post6->user_id = 1;
		$post6->save();
		
		$post7 = new Post();
		$post7->title = "Now let's push this giant ball of oil out the window.";
		$post7->content = "Kramer: Now let's push this giant ball of oil out the window. , Jerry: People who read the tabloids deserve to be lied to. Jerry: I'm not an orgy guy. Jerry: They're ladies glasses. All you need is that little chain around your neck so you can wear them while you're playing Canasta.

George: I think it moved. Elaine: You'd really like him. Jerry: Why do people always say that? I hate everyone, why would I like him. Mr. Peterman: I’m afraid it’s your urine, Elaine. You’ve tested positive for opium…White Lotus. Yam-yam. Shanghai Sally. Elaine: There's nothing more sophisticated than diddling the maid and then chewing some gum. Jerry: The apartment elevators are always slower than the offices, because you don't have to be home on time? Jerry: Why do I always have the feeling everybody's doing something better than me on Saturday afternoons! Marlene: I can't be with someone if I don't respect what they do. Jerry: You're a cashier. George: You know, if you take everything I've done in my entire life and condense it down into one day, it looks decent.

Elaine: So is it a problem that I’m not religious? Puddy: Not for me. Elaine: Why not? Puddy: I’m not the one going to hell? George: Is it my imagination, or do really good-looking women walk a lot faster than everybody else? Latvian orthodox: What aspect of the faith do you find particularly attractive? George: I think the hats. Kramer: Now let's push this giant ball of oil out the window. Newman: Just remember, when you control the mail, you control... information. Babu Bhatt: You bad man! You very bad man! You very lazy bad man. Elaine: I'm not a lesbian. I hate men, but I'm not a lesbian. , Kramer (to Jerry): You're going to be the first pirate. Elaine: You know, it's not fair people are seated first-come-first-served. It should be based on who's hungriest. Elaine: There's nothing more sophisticated than diddling the maid and then chewing some gum. The Bubble Boy: What are you looking at? You never seen a kid in a bubble before. Jerry: Looking at cleavage is like looking at the sun. You don't stare at it. You get a sense of it and you look away.

Elaine: [whispering] When did you get a maid? Jerry: You don’t have to whisper, she knows she’s a maid. Jerry: There's very little advice in men's magazines. Women want to learn. Men think 'I know what I'm doing, just show me somebody naked. Mr. Ross: It's a terrible tragedy when parents outlive their children. George: Yes, I agree. I hope my parents go long before I do. Jerry: Maybe your yogurt isn't so non-fat. Kramer: Oh, guess again, tubby! Jerry: Did the medical journal mention anything about standing in a pool of somebody else's urine! Jerry: Well, you know, eighty-five percent of all homeless rickshaw businesses fail within the first three months. Jerry: It, uh, rhymes with a female body part. George [on Elaine's dancing style]: It's more like a full-body dry heave set to music. Newman: Vile weed! Elaine: Hey Jerry, when do you consider sex has taken place? Jerry: I'd say when the nipple makes its first appearance. Jerry: Dermatologists. Skin doesn't need a doctor. George: Of course not. Wash it, dry it, move on. Kramer: Is there a tree? Frank Costanza: No. Instead, there's a pole. It requires no decoration. I find tinsel distracting. #Festivus?\"

Elaine: Jerry, it’s three-thirty in the morning. I’m at a cockfight. What am I clinging to? Mickey: It's 100% cotton, and some wool. Jerry: So, um, do you date immature men? George: I love a good nap. Sometimes it's the only thing getting me out of bed in the morning. George: If Relationship George walks through this door, he will kill Independent George. A George, divided against itself, cannot stand. Newman: Hawaii... The most sought-after postal route of them all. The air is so dewy-sweet you don't even have to lick the stamps.\" George: Look, you don’t understand. There was shrinkage. Newman: Hawaii… The most sought-after postal route of them all. The air is so dewy-sweet you don’t even have to lick the stamps.";
		$post7->image = '/img/upload/costanza6.jpg';
		$post7->user_id = 1;
		$post7->save();
		
		$post8 = new Post();
		$post8->title = "Why do I always have the feeling everyone's doing something better than me on Saturday afternoon.";
		$post8->content = "Jerry: Why do I always have the feeling everyone's doing something better than me on Saturday afternoon. Jerry: Why would I be a leg man? I don't need legs. I have legs? Kramer: Hello… What Delay Industries? Kramer: Now let's push this giant ball of oil out the window! Jerry: Knowing you is like going into the jungle. I never know what I'm going to find next, and I'm real scared. Stan the Caddy: Let's go for the green! You know a good lawyer. George: I never tasted a cough medicine I didn't love. Estelle Costanza: You're not giving away our waterpik.

Kramer: Eight hours of jingle-belling and ho-ho-hoing. Boy, I am ho'd out! Puddy: I’ll be back. We’ll make out. Gary: I've been living a lie. George: Just one? I'm living like twenty. Kramer: El Paso. I spent a month there, one night. Kenny Banya [reading]: Why do they call it Ovaltine? The mug is round. The jar is round. They should call it Roundtine.\" Jerry: But are you still master of your domain?, George: I can't carry a pen. I'm afraid I'll puncture my scrotum? Kramer: Boxers! How do you wear these things? Look at that–they’re bagging up, they’re rising in, and there’s nothing holding me in place. George: Spring. Rejuvenation. Rebirth. Everything’s blooming. All that crap.: George: I can not express to you the feeling I get from a perfect airport pickup. George: My father was a quitter, my grandfather was a quitter, I was raised to give up. It's one of the few things I do well. Jerry: Sometimes the road less traveled is less traveled for a reason. George: Was he on his death bed? Jerry: No, he was on his regular bed. Jerry: Men want the same thing from their underwear that they want from women: a little bit of support, and a little bit of freedom?

Jerry: Why would I be a leg man? I don't need legs. I have legs. Jerry: They're ladies glasses. All you need is that little chain around your neck so you can wear them while you're playing Canasta. Kramer: Your Nana’s missing because she’s been passing those bum checks all over town and she finally pissed off the wrong people! George: Do you realize in the entire history of western civilization no one has successfully accomplished the roommate switch. Jerry: You want me to take an overview? I see a very cheap man holding a sweater trying to get away with something. That’s my overview!

George: Is it my imagination, or do really good-looking women walk a lot faster than everybody else. Newman: I mean parcels are rarely damaged during shipping. Jerry: Define rarely. Newman: Frequently.

Kramer: Here's to feeling good all the time. George: Ooh, a lesbian sighting. They’re so fascinating. Why is that? Because they don’t want us. You’ve got to respect that. Newman: I'm a little offended, Jerry. Jerry: You're not a little anything, Newman. Elaine: No, I mentioned the bisque. George: It's hard enough to meet a woman you dislike, much less like. Elaine: How was the doctor date? Jerry: It died on the table? Tim Whatley: Oh, which reminds me, did you hear the one about the Pope and Raquel Welch on the lifeboat.";
		$post8->image = '/img/upload/costanza7.jpg';
		$post8->user_id = 1;
		$post8->save();
		
		$post9 = new Post();
		$post9->title = "Yeah. I figured since I was lying about my income for a couple of years, I could afford a fake house in the Hamptons.";
		$post9->content = "George: Yeah. I figured since I was lying about my income for a couple of years, I could afford a fake house in the Hamptons. Jerry: Want to give something back? Start with the $20,000. Jerry: Elaine, have you ever gone out with a bald man? Elaine: No. Jerry: You know what that makes you? A baldist.

Thanks! Puddy: Right, Koko. That chimp's alright. High-five. George: I'm gay! I'm a gay man! I'm very, very gay. Alison: You're gay? George: Extraordinarily gay. Steeped in gayness. George: Well I, uh, I’m not sure how you pronounce it or anything, but I, uh, I believe it’s ménage à trois. Newman: I mean parcels are rarely damaged during shipping. Jerry: Define rarely. Newman: Frequently? George: Tippy toe! Tippy toe! Jerry: Nude backgammon with swimsuit models! Jerry: A leg man? Why would I be a leg man? I don't need legs. I have legs. Jerry: That's the true spirit of Christmas; people being helped by people other than me. Jerry: Yes you do, Biff. You've never been to a flea market, and you think they have fleas there? Mr. Peterman [in Burma]: So did you have any trouble finding the place? Kramer: You know what they say, 'You don't sell the steak, you sell the sizzle. Jerry: Men want the same thing from their underwear that they want from women: a little bit of support, and a little bit of freedom.

George: I can’t carry a pen. I’m afraid I’ll puncture my scrotum. Kramer: [in the sauna]: It's like a sauna in here. George: Why is what I do so important? Why must I always be the focal point of attention? Let me just be. Let me live.

Newman: I mean parcels are rarely damaged during shipping. Jerry: Define rarely. Newman: Frequently. Jerry: She's a sentence finisher. It's like dating Mad Libs. George: Who buys an umbrella anyway? You can get them for free at the coffee shop in those metal cans. George: Is it my imagination, or do really good-looking women walk a lot faster than everybody else. George: I’m much more comfortable criticizing people behind their backs. George: I think she finds my stupidity charming. George: Beautiful women. You know, they get away with murder. You never see one of them lift anything over three pounds. Jerry: A two-year old is kind of like having a blender, but you don't have a top for it. George [visiting a mental institution]: I should be in a place like this. Jerry: Sex, that’s meaningless, I can understand that, but dinner; that’s heavy. That’s like an hour. Frank: Serenity now! Serenity now. Jerry: I like the button fly. That is one place on my wardrobe I do not need sharp interlocking metal teeth. It's a mink trap down there.

George: I love a good nap. Sometimes it's the only thing getting me out of bed in the morning. Jerry: Looking at cleavage is like looking at the sun. You don't stare at it. You get a sense of it and you look away. George: You've been living a lie? I've been living like twenty. Jerry: Yes you do, Biff. You've never been to a flea market, and you think they have fleas there. Kramer: The library investigator's name is actually Bookman? That's amazing. That's like an ice cream man named Cone. Lloyd Braun: Serenity now, insanity later.";
		$post9->image = '/img/upload/costanza8.jpg';
		$post9->user_id = 1;
		$post9->save();
		
		$post10 = new Post();
		$post10->title = "I think I can sum up the show for you with one word: nothing.";
		$post10->content = "George: I think I can sum up the show for you with one word: nothing. Jerry: You might not know it to look at me, but I can run really really fast? Elaine: You cannot believe what I’m going through. That card is plastered all over the office. Everybody is calling me Nip. The Bubble Boy [to Susan]: How 'bout taking your top off.

Jerry: Why do I always have the feeling everybody's doing something better than me on Saturday afternoons. Jerry: Looking at cleavage is like looking at the sun. You don’t stare at it. You get a sense of it and you look away. George: Yeah. I figured since I was lying about my income for a couple of years, I could afford a fake house in the Hamptons. George: You know, if it was a regular salad I wouldn't have said anything. But you had to have the BIG salad. Frank Costanza: A Festivus for the rest of us! J. Chiles: So we got an attractive woman, wearing a bra, no top, walkin' around in broad daylight. She's flouting society's conventions. George: It's not good to hold it in. I read that in a medical journal. , \"Kramer: Eight hours of jingle-belling and ho-ho-hoing. Boy, I am ho'd out.\" George: You know, if it was a regular salad I wouldn't have said anything. But you had to have the BIG salad. Jerry: Maybe your yogurt isn't so non-fat. Kramer: Oh, guess again, tubby.

Tim Whatley: Oh, which reminds me, did you hear the one about the Pope and Raquel Welch on the lifeboat? George: I got greedy. Flew too close to the sun on wings of pastrami. Jackie Chiles: Rugged? The man’s a goblin. Kramer: Jerry, it's L.A.! Nobody leaves. She's a seductress, she's a siren, she's a virgin, she's a whore. George: She thinks I'm a nice guy. Women always think I'm nice. But women don't want nice. Jerry: I gotta get on that Internet. I'm late on everything. George: I never tasted a cough medicine I didn't love. Puddy: I painted my face Elaine: You painted your face? Puddy: Yeah.' Elaine: Why? Puddy: Well, you know, support the team!

Jerry: People who read the tabloids deserve to be lied to. Jerry: I like the button fly. That is one place on my wardrobe I do not need sharp interlocking metal teeth. George: A plane crash? A heart attack? Lupus? Is it lupus. Elaine: Snapple? Babu's Brother: No, too fruity. Elaine: Movie hot dogs? I'd rather lick the food off the floor. Kramer: It's the timeless art of seduction. Jerry: Men want the same thing from their underwear that they want from women: a little bit of support, and a little bit of freedom. George: It must be impossible for a Spanish person to order seltzer and not get salsa. Sidra: And by the way, they're real and they're spectacular. , George: My father was a quitter, my grandfather was a quitter, I was raised to give up. It's one of the few things I do well. There you go! Jerry (to George): Do your thing there where you lie to everyone. Newman: I mean parcels are rarely damaged during shipping. Jerry: Define rarely. Newman: Frequently. Elaine: There's nothing more sophisticated than diddling the maid and then chewing some gum.

Jerry: Breaking up is like knocking over a coke machine. You can't do it in one push, you got to rock it back and forth a few times. George: You know, if it was a regular salad I wouldn't have said anything. But you had to have the BIG salad? Jerry: I'll meet you at the Diplomat's Club. I'll be the one without the big red sash. George: I can't carry a pen. I'm afraid I'll puncture my scrotum. George [comes out of the doctor's office]: I was in there for two minutes. He didn't do anything: touch this, feel that, 75 bucks. George: Why is what I do so important? Why must I always be the focal point of attention? Let me just be. Let me live. Seth: That’s not going to be good for business. Jerry: That’s not going to be good for anybody. Jerry: Why would anybody want a friend? Jerry: People who read the tabloids deserve to be lied to. Jerry: No, I don't eat dinner. Dinner's for suckers. George: From the first time I laid eyes on a brassiere, I was enthralled. Newman: Alright, pace yourself, 'Cause you're gonna have to do this all day for very little money! George: Do you ever get down on your knees and thank God you know me and have access to my dementia.";
		$post10->image = '/img/upload/costanza9.gif';
		$post10->user_id = 1;
		$post10->save();
		
		$post11 = new Post();
		$post11->title = "There's nothing more sophisticated than diddling the maid and then chewing some gum.";
		$post11->content = "Elaine: There's nothing more sophisticated than diddling the maid and then chewing some gum. Jerry: A bookstore is one of the only pieces of evidence we have that people are still thinking. George: I always get the feeling that when lesbians look at me, they're thinking, 'That's why I'm not a heterosexual.

George: Why do they make the condom packets so hard to open? Jerry: Probably to give the woman a chance to change her mind. Jimmy: Oh yeah, Jimmy’s ready. Jimmy’s got some new moves. Check Jimmy out. Oooh, Jimmy’s down.

Newman: Jerry, I’m a little offended. Jerry: You’re not a little anything, Newman. Frank Costanza: Starting tonight we're having a little sales contest. The loser gets fired. The winner gets a Water Pik. Jerry: People with guns don't understand. That's why they get guns. Too many misunderstandings.

Kramer: Eight hours of jingle-belling and ho-ho-hoing. Boy, I am ho'd out. Kramer: I've been partying all night. I saw the sunrise at Liza's. George: What, Minelli? Kramer: No. Jerry: I was ten. I would’ve been friends with Stalin if he had a Ping Pong table?

George: Why is what I do so important? Why must I always be the focal point of attention? Let me just be. Let me live. George: Why would we want to help somebody? That's what nuns and Red Cross workers are for!";
		$post11->image = '/img/upload/costanza10.jpg';
		$post11->user_id = 1;
		$post11->save();

		$post12 = new Post();
		$post12->title = "Oh, which reminds me, did you hear the one about the Pope and Raquel Welch on the lifeboat.";
		$post12->content = "Tim Whatley: Oh, which reminds me, did you hear the one about the Pope and Raquel Welch on the lifeboat. Frank Costanza: George, we've had it with you. Understand? We love you like a son, but even parents have limits. Jerry: You want me to take an overview? I see a very cheap man holding a sweater trying to get away with something. That’s my overview? Babu Bhatt: You bad man! You very bad man! You very lazy bad man. George: I want to be the one person who doesn’t die with dignity. I live my whole life in shame. Why should I die with dignity. Jerry: People on dates shouldn't even be allowed out in public. Jerry: You? You'll be out before we get the check. George [trying to be cool]: I am down. I am totally down. Mark me down.

Elaine: Movie hot dogs? I'd rather lick the food off the floor. George: The sea was angry that day, my friends. Like an old man trying to send back soup in a deli.

Jerry: She had man-hands! George: It's hard enough to meet a woman you dislike, much less like. Frank Costanza: You know what I like about Manhattan? No mosquitoes. Jerry: People on dates shouldn't even be allowed out in public. George: I have no funny friends. I'm the funny one. El-Clowno! Jerry: Sometimes the road less traveled is less traveled for a reason. Jerry: You? You'll be out before we get the check? George: I like flowing, cascading hair. Thick, lustrous hair is important to me. Jerry: A chef who doesn't wash is like a cop who steals. It's a cry for help. He wants to get caught. Elaine: I don't know how you guys walk around with those things. George: I got greedy. Flew too close to the sun on wings of pastrami. Jerry: I was ten. I would’ve been friends with Stalin if he had a Ping Pong table. Jerry: So, um, do you date immature men?, Alton: We had a funny guy with us in Korea. A tailgunner. They blew his brains out all over the Pacific. There’s nothing funny about that?

Kramer: Retail is for suckers. Kenny Banya [reading]: Why do they call it Ovaltine? The mug is round. The jar is round. They should call it round tine. Jerry: No, I don't eat dinner. Dinner's for suckers.

George: I want to be the one person who doesn’t die with dignity. I live my whole life in shame. Why should I die with dignity. Jerry: I don't return fruit. Fruit is a gamble. I know that going in. Newman: But you remember this: when you control the mail, you control... information. George: If Relationship George walks through this door, he will kill Independent George. A George, divided against itself, cannot stand. George: I'd rather be dating the blind. A good looking blind woman doesn't even know you're not good enough for her. George: I can't face the bubble boy.;
		$post12->image = '/img/upload/costanza11.png'";
		$post12->user_id = 1;
		$post12->save();
	}
}