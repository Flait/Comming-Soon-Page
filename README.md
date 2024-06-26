Features:
- responsive html + sass made according to figma (I need to utilize sass better AI was heavily used to generate the sass + html)
- time countdown
- subscribe to newsletter by sending email
- load price of btc from 3rd party API
- dockerized apache + php, proxy to handle cors, mailhog to test emails
- phpstan for php

How to run
1. docker-compose build
2. docker-compose up -d
3. Access the appication:
- Application: http://localhost:8000
- MailHog: http://localhost:8025
