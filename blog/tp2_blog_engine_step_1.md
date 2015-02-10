#TP 2: Blog engine, step 1.
Distribué le 11-02-2014.

## Enoncé

Le but de ce TP est d'avoir un début de blog. Je veux pouvoir :

* Consulter la liste de tous les billets de mon blog sur `/pages/all.php`
* Consulter un billet de blog en particulier (ici le `#1337`) sur `/pages/post.php?id=1337`
* Bonus: consulter tous les billets ayant un tag particulier sur `/pages/post-by-tag.php?tag=mimolette`
* Bonus bis: pouvoir écrire un billet via une page proposant un formulaire, sur `/pages/write.php`.

### Qu'est ce qu'un billet de blog?

Un billet de blog ("BlogPost") est composé d'un texte et d'un titre. Un billet est publié à une date donnée. 

Il est également possible de tagger un billet, c'est à dire de lui associer des mots, tels `"cheddar"`, `"camembert"`, ou encore `"fourme-d-ambert"`.

### Ce qui vous est fourni

* Un squelette de page web avec un design simple
* Une classe qui vous permet de sauvegarder vos billets de blog, et de les récupérer plus tard : `MagicBox`.

### `Magicbox`: mode d'emploi


Exemple d'utilisation de la classe `MagicBox`

```
$blogPost = new BlogPost(1337, 'My secret welsh recipe');
$blogPost->setText('Take a pound of cheddar, melt it. ……(rest of the recipe)…… Eat everything. Get a heartstroke');

$magicBox = new MagicBox();
$magicBox->putBlogPost($blogPost);
$magixBox->save();
```

Bien plus tard, sur une autre page…

```
$magicBox = new MagicBox();
$blogPosts = $magicBox->retrieveAllBlogPosts();

foreach ($blogPosts as $post) {
  echo $post->getTitle() . '<br />';
}
```

Pourrait produire ce résultat

```
My secret welsh recipe
Deep fried filet-mignon
Bagel and bacon: a love story
```

