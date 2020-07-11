const wait = time => new Promise(resolve => setTimeout(resolve, time))

// GlitchedWriter: https://www.npmjs.com/package/glitched-writer


wait(2000)
	.then(() => glitchWrite(glitch_this, 'To tusharch0.github.io', ))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'The owner of this is site is Tushar Choudhary.'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'or tusharch0 for my ScreenName.'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'I am a humble developer'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'You wanna known me more?'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'LET\'S GO!!!'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'My SKILLS'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Coding: Java/Python/Nodejs/C++/C#/ASM'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'HTML/CSS/Javascript/PHP'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Hacking'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Reverse Engineer'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Web/Network Pentesting'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'DevOps'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Malware/DDoS/Botnet'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'If you wanna contact me:'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Facebook: https://www.facebook.com/tusharch0'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'GitHub: https://github.com/tusharch0'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'Twitter: https://twitter.com/tusharch0'))
	.then(() => wait(2000))
	.then(() => glitchWrite(glitch_this, 'LAST WORD: Stay hungry stay foolish'))
	.then(() => wait(10000))
	.then(() => glitchWrite(glitch_this, ':)'))

	//.then(() => input.removeAttribute('disabled'))

const displayWriter = setGlitchedWriter(glitch_this)

input.addEventListener(
	'input',
	_.debounce(() => displayWriter.write(input.value), 500, {
		maxWait: 1000,
	}),
)

glitch_this.addEventListener(
	'glitchWrote',
	e => (logs.innerHTML += `<p>${e.detail.text}</p>`),
)
