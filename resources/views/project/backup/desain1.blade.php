<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Ally - Unleash the full potential of AI</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the CSS file -->
</head>
<style>
    body {
        font-family: 'Roboto', 'Helvetica Neue', Arial, sans-serif;
  background-color: #e6ffe6;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Header styles */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 0;
}

.logo {
  display: flex;
  align-items: center;
}

.logo img {
  width: 30px;
  height: 30px;
  margin-right: 10px;
}

nav a {
  margin-left: 20px;
  text-decoration: none;
  color: #333;
}

.sign-in-button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

/* Hero section styles */
.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: linear-gradient(to bottom right, #333333, #1a1a1a);
  color: white;
  padding: 50px;
  border-radius: 20px;
}

.hero-content {
  flex: 1;
}

.hero h1 {
  font-size: 3em;
  margin-bottom: 20px;
}

.hero p {
  font-size: 1.2em;
  margin-bottom: 30px;
}

.cta-button {
  background-color: #4CAF50;
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 25px;
  font-size: 1.1em;
  cursor: pointer;
  margin-right: 20px;
}

.hero-image {
  flex: 1;
  text-align: right;
}

.hero-image img {
  max-width: 100%;
  height: auto;
}

/* Stats section */
.stats {
  display: flex;
  justify-content: flex-start;
  margin-top: 30px;
}

.stat-item {
  margin-right: 50px;
}

.stat-number {
  font-size: 2em;
  font-weight: bold;
}

.stat-label {
  color: #666;
}

/* Destinations section */
.destinations {
  margin-top: 50px;
}

.destinations h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
}

.destination-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.destination-item {
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 10px;
}

.destination-item h3 {
  font-size: 1.5em;
  margin-bottom: 10px;
}

.destination-item p {
  color: #666;
}
</style>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="logo.png" alt="AI Ally Logo">
                <span>AI Ally</span>
            </div>
            <nav>
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#testimonials">Testimonials</a>
            </nav>
            <button class="sign-in-button">Sign in</button>
        </header>

        <main>
            <section class="hero">
                <div class="hero-content">
                    <h1>Unleash the full potential of AI</h1>
                    <p>AI Ally is a versatile assistant that utilizes state-of-the-art natural language processing to provide real-time support and assistance across various domains.</p>
                    <button class="cta-button">Get the App →</button>
                    <button class="secondary-button">More</button>

                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">4.8</div>
                            <div class="stat-label">Rating on AppStore</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">700k+</div>
                            <div class="stat-label">Active users</div>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="phone-mockup.png" alt="AI Ally App Interface">
                </div>
            </section>

            <section class="destinations">
                <h2>Different destinations</h2>
                <div class="destination-grid">
                    <div class="destination-item">
                        <h3>Explore AI Applications</h3>
                        <p>We explore the diverse ways in which this technology can revolutionize work across various industries and fields.</p>
                    </div>
                    <div class="destination-item">
                        <h3>Streamline Processes</h3>
                        <p>Discover how AI can streamline processes and elevate your work to new heights.</p>
                    </div>
                    <div class="destination-item">
                        <h3>Discover All Applications</h3>
                        <p>Learn about the wide range of applications where AI can make a significant impact.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
