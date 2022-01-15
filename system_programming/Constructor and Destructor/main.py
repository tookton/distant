class Person:
    name = str()
    surname = str()
    qualify = int()
    sex = str()
    def __init__(self, name, surname, qualify = 1, sex='male'):
        self.name = name
        self.surname = surname
        self.qualify = qualify
        self.sex = sex

    def prints(self):
        ls = [self.name, self.surname, str(self.qualify)]
        return str(' '.join(ls))

    def __del__(self):
        ls = [self.name, self.surname]
        if self.sex == 'male':
            text = "Mr. "
        else:
            text = "Mrs. "

        print('Goodbye, ' + text + str(' '.join(ls)))

if __name__ == '__main__':
    a = Person("Irina", "Ivanova", 50, "female")
    b = Person("Nataly", "Davis", 100, "female")
    c = Person("Peter", "Williams", 10)

    print(a.prints())
    print(b.prints())
    print(c.prints())
    del(c)
    input('>')
