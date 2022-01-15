import random


class Person:
    def __init__(self, team_id):
        self.id = id(self)
        self.team_id = team_id



class Hero(Person):
    lvl = 1

    def levelUp(self, d=random.randint(1, 10)):
        self.file1 = open('id_hero.txt', 'w')
        if d:
            self.lvl += d
            self.file1.write("({}) c уровнем {}".format(self.id, self.lvl))
            self.file1.close()


class Soldat(Person):
    number = 1

    def setNumber(self, number):
        self.number = number

    def toHero(self, hero):
        self.hero = hero

    def folowToHero(self):
        self.file1 = open('id_hero.txt', 'r')
        self.line = self.file1.readline()
        if self.line != ",":
            print("Герой команды {} с личным номером {} захватил с собой 1 солдата c личным id ({}) из команды {}.".format(self.team_id, self.line, self.id, self.team_id))
            self.file1.close()
teams = []

teams_cnt = random.randint(2, 5)
for i in range(teams_cnt):
    teams.append([[], Hero(i + 1)])

soldat = int(input("Количество воинов: ")) + 1
for i in range(1, soldat):
    t = random.randint(1, teams_cnt)
    s = Soldat(t)
    s.toHero(teams[t - 1][1])
    s.setNumber(len(teams[t - 1][0]) + 5)
    teams[t - 1][0].append(s)

teams_sol = []
for i in range(teams_cnt):
    print("В команде {}: {} солдат(а)".format(i+1, len(teams[i][0])))
    teams_sol.append(len(teams[i][0]))

team_max = max(teams_sol)
for i in range(len(teams_sol)):
    if team_max == teams_sol[i]:
        teams[i][1].levelUp()

rnd_t = random.randint(1, teams_cnt) - 1
teams[rnd_t][0][random.randint(1, teams_sol[rnd_t]) - 1].folowToHero()
