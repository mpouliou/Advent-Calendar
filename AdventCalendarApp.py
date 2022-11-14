from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def hello():
    dates = 25
    facts = {
        1:'When the Candy Cane was invented in Germany, it was made into a J for Jesus. The red stripes symbolise his blood.',
        2:'It is a tradition in Japan to eat KFC for Christmas. Orders must be placed two months in advance.',
        3:'Christmas lights were so expensive that they used to be rented rather than sold. An electrically lit tree was a status symbol in the early 1900’s.',
        4:'Hanging stockings started by accident.',
        5:'The people of London receive a tree for Trafalgar Square from the people of Oslo, Norway every year to thank them for their assistance during World War II.',
        6:'Ukrainian Christmas tree decorations often include an artificial spider and web because they believe a spider web found on Christmas morning brings good luck.',
        7:'The Statue of Liberty is the largest Christmas gift ever given.',
        8:'According to tradition, you should eat one mince pie on each of the 12 days of Christmas to bring good luck.',
        9:'A large part of Sweden’s population watches Donald Duck cartoons every Christmas Eve – a tradition that started in 1960.',
        10:'Christmas pudding was originally a soup made with raisins and wine.',
        11:'1066 – King William I of England was crowned on Christmas Day.',
        12:'Rio de Janeiro, Brazil has the largest floating Christmas tree in the world; it is 278 feet tall.',
        13:'Nearly six million dollars are spent during the holiday season on ugly Christmas sweaters.',
        14:'You can actually mail a letter to Santa’s postal code in Canada. The address is — Santa Claus, North Pole, H0H 0H0, Canada.',
        15:'The Swarovski Star atop the 72-foot-tall Rockefeller Center Christmas Tree has a whopping three million glittering Swarovski crystals!',
        16:'Sir Henry Cole designed the first-ever Christmas card and sold it at an auction for $6846.',
        17:'Each year during Christmas, over 8.5 million lights are used to decorate the magical Walt Disney World.',
        18:'The song “Jingle Bells” holds a Guinness World Record for being the first-ever song played in outer space.',
        19:'There are more than 630 different kinds of Christmas trees. Santa Claus is known by over 70 different names all around the',
        20:'1 in 3 men wait until Christmas Eve to do their shopping.',
        21:'Christmas used to be illegal. Oklahoma was the last U.S. state to declare Christmas a legal Holiday in 1907.',
        22:'Santa Claus is known by over 70 different names all around the world.',
        23:'need to add!',
        24:'need to add!',
        25:'need to add!',
        }
    return render_template('index.html', facts=facts)