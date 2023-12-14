<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Symfony\Component\String\u;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'name' => 'Jujutsu Kaisen 0: The Movie',
            'cover' => 'https://www.nautiljon.com/images/more/03/76/314667.webp',
            'synopsis' => "Il s'agit de l'adaptation du tome 0 du manga Jujutsu Kaisen.

                            Yuta Okkotsu est hanté par l'esprit de Rika, son amie d'enfance morte dans un accident de la route. Cette dernière n'est plus la petite fille qu'il a connu et se manifeste sous la forme d'une entité monstrueuse qui le protège contre sa volonté.

                            Après un énième accident causé par ce fléau, Yuta est récupéré par Satoru Gojo, professeur à l'école d'exorcisme de Tokyo, qui le convainc de rejoindre l'établissement pour maîtriser son énergie occulte.

                            Pourra-t-il en apprendre suffisamment à temps pour affronter la malédiction qui le hante ?

                            ",
            'category' => 'Anime',
            'producer' => 'Sung-ho Park',
            'release_date' => '24/12/2021'
        ]);

        DB::table('movies')->insert([
            'name' => 'Kimetsu No Yaiba - Le Film : Le Train De L\'infini',
            'cover' => 'https://www.nautiljon.com/images/cinema/00/44/demon_slayer_le_train_de_l_infini_444.webp?0',
            'synopsis' => "Il s'agit d'un film d'animation basé sur le manga Kimetsu no Yaiba de Gotoge Koyoharu. Ce film adapte l'arc du Demon Train.

                            Enmu, la première Lune Inférieure, a été chargé de tuer Kamado Tanjirô pour devenir une Lune Supérieure et avoir plus de sang de Muzan.

                            Pendant ce temps, Tanjirou, Zenitsu et Inosuke décident d'acheter des billets pour monter à bord du train de l'infini et ainsi rejoindre Rengoku Kyôjurô, le Pilier de la flamme, dans l'espoir d'en apprendre d'avantage sur la danse du dieu du feu.
                            ",
            'category' => 'Anime',
            'producer' => 'Haruo Sotozaki',
            'release_date' => '16/10/2020'
        ]);

        DB::table('movies')->insert([
           'name' => 'Haikyû Final : The Dumpster Battle',
            'cover' => 'https://pbs.twimg.com/media/GBS_uQebAAAoltk?format=jpg&name=medium',
            'synopsis' => "Il s'agit de la suite directe de la saison Haikyu !! To the Top Part 2.

                            Après avoir vaincu Inarizaki, une des équipes favorites du tournoi, Karasuno se trouve enfin confronté à Nekoma dans un match officiel !
                            ",
            'category' => 'Anime',
            'producer' => 'Susumu Mitsunaka',
            'release_date' => '16/02/2024'
        ]);

        DB::table('movies')->insert([
            'name' => 'Your Name',
            'cover' => 'https://fr.web.img2.acsta.net/pictures/16/12/12/13/49/295774.jpg',
            'synopsis' => "Mitsuha est une lycéenne qui réside dans une petite ville située dans les montagnes. Elle vit aux côtés de sa petite soeur, sa grand-mère ainsi que son père, bien que ce dernier ne soit jamais à la maison à cause de son travail de maire. En réalité, sa vie ne lui convient pas et elle souhaite pouvoir vivre à Tokyo.

                            Taki est un lycéen qui habite à Tokyo et qui adore l'architecture et l'art. Il vit une vie normale d'étudiant entouré d'amis et travaille même dans un petit restaurant italien. Mais un jour, il fait un rêve dans lequel il est dans la peau d'une jeune fille qui vit dans une ville en montagne. Mitsuha, quant à elle, fait également un rêve dans lequel elle est dans un corps d'un garçon tokyoïte.

                            Quel est le secret qui se cache derrière ces étranges rêves qui échangent la vie de ces deux jeunes gens ?",
            'category' => 'Anime',
            'producer' => 'Makoto Shinkai',
            'release_date' => '28/12/2016'
        ]);

        DB::table('movies')->insert([
            'name' => 'A Silent Voice',
            'cover' => 'https://fr.web.img3.acsta.net/pictures/18/07/13/11/32/3961973.jpg',
            'synopsis' => "Tout commence lorsque Shouko Nishimiya intègre en cours d'année la classe de primaire de Shouya Ishida. La jeune Shouko est sourde et Shouya est un jeune garçon turbulent qui n'en fait qu'à sa tête et qui ne cause que des problèmes. Ce sont deux personnes différentes et Shouya ne semble pas comprendre qui est réellement Shouko. De ce fait, il commencera à la brutaliser, ne sachant pas comment s'y prendre avec elle. La classe suivra le mouvement au fur et à mesure, mais plus discrètement, sans que leur professeur principal ne fasse d'efforts pour les rappeler à l'ordre.

                            Seulement un jour, le garçon dépasse les limites et le directeur demande à savoir qui a cassé les appareils auditifs de Shouko. C'est ainsi que Shouya réalisera qu'il se retrouve tout seul car tout le monde lui tourne le dos, feignant d'avoir été manipulés par ce dernier. Shouko est transférée dans une nouvelle école et Shouya se rend compte que chaque jour, malgré tout, elle souhaitait seulement être son amie.

                            Les années passent : Shouya est désormais un lycéen de dernière année. Rempli de remords, il ne peut penser à autre chose qu'à se repentir de ses actes envers Shouko. Il a même décidé d'apprendre la langue des signes pour qu'elle puisse comprendre ce qu'il a à lui dire. Avant de mettre fin à ses jours, il apprend où se trouve Shouko et décide de la rencontrer afin d'alléger son cœur mais il ne se doutait pas que ces retrouvailles allaient changer son destin.
                            ",
            'category' => 'Anime',
            'producer' => 'Naoko Yamada',
            'release_date' => '17/09/16'
        ]);

        DB::table('movies')->insert([
            'name' => 'Hotarubi no Mori e',
            'cover' => 'https://m.media-amazon.com/images/M/MV5BM2FkZjM5ODUtMGM0OC00ZTk2LWFjZDYtNmIzMGRhZWY0MjExXkEyXkFqcGdeQXVyNDgyODgxNjE@._V1_.jpg',
            'synopsis' => "Alors qu'elle n'avait que six ans, Hotaru se perdit dans une forêt pendant ses vacances d'été.
                            Elle sera secourue par une personne portant un masque de youkai prénommée Gin. Il dit être un esprit de la forêt et que si on venait à le toucher, il disparaîtrait.
                            Hotaru, intriguée par cette personne, décide de passer ses vacances d'été avec lui. Une amitié naît alors entre eux.
                            Depuis ce jour, Hotaru vient rendre visite à Gin chaque année à la même période.

                            Le film nous raconte les moments passés entre Hotaru et Gin durant dix étés.

                            Cette histoire est basée sur un one shot annonçant Natsume Yuujinchou.",
            'category' => 'Anime',
            'producer' => 'Omori Takahiro',
            'release_date' => '17/09/2011'
        ]);

    }
}
