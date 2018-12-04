# captchaSolver
Solving CAPTCHAs using 2 different Neural Networks (Pre-Trained and Self-Trained).
Captcha Solver is an exercise for CICE´s **Ethical Hacking Masters Degree - EC-Council & CompTIA. MSI**.

## Idea
Explanation of different methods using **Machine Learning** to solve some CAPTCHA security measures.

## Machine Learning Solution
The first exercise can be found in **HackingCAPTCHAS_MachineLearning.ipynb**
We try to hack one of Wordpress most used CAPTCHA Plugins called *Really Simple CAPTCHA*.
Analyzing the source code of the plugin we find a method to generate CAPTCHA images and their solution.
We use this information to train a **Deep Learning Convolutional Neural Network** so it can solve any other random CAPTCHA produced by this plugin.
Using **Keras** and **TensorFlow** we use a 10.000 training data set combined with OpenCV to detect individual letters.
After training, the neural network proves being able to solve this sort of CAPTCHA images with a **99.89% accuracy**.

## Machine Learning Pre-Trained Solution
In this second example, we use **Web Scrapping** to try and complete a web form protected with a CAPTCHA image a human must solve.
We use a **LSTM Neural Network**, combined with **Google´s Tesseract OCR Engine** to solve the CAPTCHA and automate the form fill process.
The network is pre-trained with 400.000 individual characters in over 100 languages.
In this other example, the *randomness* of the CAPTCHA generator is much bigger than the one in the previous example. 
Therefore, it must be more secure. Nevertheless, using our Neural Network, we prove it solves the CAPTCHA 92% of the time.
