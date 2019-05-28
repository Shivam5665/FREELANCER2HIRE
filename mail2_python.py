import os
import smtplib
from email import encoders
from email.mime.base import MIMEBase
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText


COMMASPACE = ', '

def main():
    sender = 'sv138927@gmail.com'
    gmail_password = 'Temporary5665'
    recipients = ['svverma@mitaoe.ac']
    
    # Create the enclosing (outer) message
    outer = MIMEMultipart()
    outer['Subject'] = 'Establishing Connection - FREELANCER2HIRE'
    outer.attach(MIMEText("Hey! I am quite impressed by your skills and project experience.And I'm in search of a person having capabilities just like you. So i would like to know more about your work in past and also about your skills."))
    outer.attach(MIMEText("\nBelow is the abstract of my project.Let me know if you're interested to work with me"))
    outer['To'] = COMMASPACE.join(recipients)
    outer['From'] = sender
    text = outer.as_string("FREELANCER2HIRE")
    outer.preamble = 'You will not see this in a MIME-aware mail reader.\n'

    # List of attachments
    attachments = ['/home/shivam/Study/project/Minor_SY/minorreport.docx']

    # Add the attachments to the message
    for file in attachments:
        try:
            with open(file, 'rb') as fp:
                msg = MIMEBase('application', "octet-stream")
                msg.set_payload(fp.read())
            encoders.encode_base64(msg)
            msg.add_header('Content-Disposition', 'attachment', filename=os.path.basename(file))
            outer.attach(msg)
        except:
            print("Unable to open one of the attachments. Error: ", sys.exc_info()[0])
            raise

    composed = outer.as_string()

    # Send the email
    try:
        with smtplib.SMTP('smtp.gmail.com', 587) as s:
            s.ehlo()
            s.starttls()
            s.ehlo()
            s.login(sender, gmail_password)
            s.sendmail(sender, recipients, composed)
            s.close()
        print("Email sent successfully!")
    except:
        print("Unable to send the email. Error: ", sys.exc_info()[0])
        raise

if __name__ == '__main__':
    main()
