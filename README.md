# Bellingcat Hackathon - Digital Investigation Tool 2022

This file will include all the information related to Bellingcat Hackathon - Digital Investigation Tool. The main idea will be to build a single tool / network for all researchers.

## Team Members

-   [@pavelas](https://github.com/Pavelas) GitHub profile.

## Tool Description

**This tool will try to solve the following problems:**

-   Find, collaborate and share work with other researchers easier and faster.
-   Possibility to search and share the right tools.
-   Raise challenges or questions to speed up and faciliate the research process.
-   It will facilitate the learning process for new researchers.
-   Will unite researchers into one joint team.

## Installation

1.  Make sure you have [Composer](https://getcomposer.org/), [Node and NPM](https://nodejs.org/en/) and [PHP](https://www.php.net/) installed.

2.  Download the tool's repository using the command:

    ```
    git clone git@github.com:Pavelas/bellingcat-hackathon.git
    ```

3.  Move to the tool's directory and install the tool

    ```
    cd bellingcat-hackathon

    composer install
    npm install
    ```

4.  Make sure you have [configured the database](https://laravel.com/docs/9.x#databases-and-migrations), you can use [SQLite](https://www.sqlite.org/index.html)

5.  Once you have configured your SQLite database, you may run your application's database migrations, which will create your application's database tables:

    ```
    php artisan migrate
    ```

6.  Start Laravel's local development server using the Laravel's Artisan CLI serve command:

    ```
    cd bellingcat-hackathon

    php artisan serve
    npm run dev
    ```

## Usage

Once you have started the Artisan development server, the application will be accessible in your web browser at [http://localhost:8000](http://localhost:8000) or [http://127.0.0.1:8000](http://127.0.0.1:8000).

**Demo user will be generated automatically:**

-   Username: **bellingcat@bellingcat.com**
-   Password: **bellingcat**

## Additional Information

### The Problem

In this section I will try to describe what problems and challenges I have noticed based on a survey from [Bellingcat](https://www.bellingcat.com/), [These are the Tools Open Source Researchers Say They Need](https://www.bellingcat.com/resources/2022/08/12/these-are-the-tools-open-source-researchers-say-they-need), and my personal experience.

#### Survey Summary

More than 500 people took the time to answer our questions, telling [Bellingcat](https://www.bellingcat.com/) about their experiences using (or failing to use) various online tools.

**I came to the following conclusions:**

-   **49.7%** of researchers are doing their work during their free time.
-   The biggest group **35%** indicated that they still see a need to improve their skills.
-   The biggest group **34.7%** reported that they use tools.
-   More than **30%** have never used GitHub, **22%** don’t know how to use them, **23.4%** struggled or failed.
-   More than **83%** of the survey respondents find it either difficult or time-consuming to find the right tools.

So, what I see is that there is a huge interest in OSINT, many people are interested and ready to do that even during their free time. But at the same time researchers are facing difficulties in learning, finding the right tools, and using these tools. As a result, it may extend the research time, degrade the quality of the research, or even neglect research.

#### Personal Experience

Unfortunately, my personal experience is very similar to the survey respondents. I am a software engineer, but sometimes, it is hard to find out and find the right tools and how to use them even for me. At the same time, it is hard to find like-minded people to speed up and facilitate the research process. Also, sometimes it is difficult to find research to contribute to. Therefore, most of the time, even if there is free time and the desire to contribute to the OSINT community, I am unable to do so.

**My personal insights:**

-   Engineers have different communities where they can ask for help and help others. For example: [GitHub](https://github.com), [Stackoverflow](https://stackoverflow.com), etc.
-   Data scientists have different communities where they can find datasests, learning material, competitions. For example: [Kaggle](https://www.kaggle.com), [Google Colab](https://colab.research.google.com), etc.
-   OSINT community is very separate and isolated into small groups or sometimes it's just individual people doing their job.

### The Solution

In this section, I will try to provide a solution to the problems I mentioned above. The main idea would be to create a community that would be like a single and universal digital investigation tool for all researchers. This tool could have solve several problems at once.

#### Community

The main goal is to unite people into one community, so that people would be able to:

-   Introduce themselves, highlight their strongest areas.
-   Discover other researchers and find co-researchers.
-   Participate in OSINT challenges or competitions.
-   Share tools they're using or explore what tools other researchers are using.
-   Easily build OSINT Frameworks or Flow Charts.

#### Tools

Tools database for everyone with the following features:

-   Allow researchers to submit or request tools.
-   Share or explore guides for specific tools.
-   Ask for a help or support other researchers if they're struggling with tools.
-   Save the most favorite tools and share with others.
-   Search tools based on topic / category or the data they have or looking for.
-   Attach tools to research publications, so that others would be able to see and learn what tools have been used.
-   Build OSINT Frameworks or Flow Charts using Tools database.
-   Integrate tools using 3rd party APIs in order to provide user-friendly UI and easy access for everyone.

#### Guides

Allow researchers to write and share their work with others. Researchers would be able to learn about different methods and techniques on how to solve various problems, comment, give advice from each other.

#### Collaboration

It could be a very simple way of bringing people together or mobilizing the whole community to solve the most important problems. I have got inspired by Kaggle competitions, where people or companies can provide a challenge and different teams or individuals are trying to solve/provide the most efficient ML model within a short period. It could be something just plain fun, like a challenge, for example, finding geolocation as fast and accurate as possible. So, that junior researchers would be able to practice and learn to use various tools. Or it could be even something serious, for example, Bellingcat may ask for community help and teams or individuals would try to do their research and share their discoveries. Based on that, it would be possible to compare efficiency and based on that share the most efficient ways to achieve certain results. Also it would be possible to compare data accuracy, for example if multiple researchers reach the same result.

#### TBA

I have more ideas that could be supplemented or added in the future, however, the features described above are the most important in my opinion. This could attract more people and allow them to collaborate and contribute to the OSINT community.
