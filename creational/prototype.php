<?php
declare(strict_types=1);

interface ClonableInterface {
    public function __clone();
}

class WindowControls {
    public function __construct(public array $controls)
    {
    }
}

class Window implements ClonableInterface {
    public function __construct(
        protected string $name,
        protected WindowControls $controls
    )
    {
    }

    public function setName(string $newName) {
        $this->name = $newName;
    }

    protected function makeFromCopy(Window $w): Window
    {
        return new static($w->name, new WindowControls($w->controls->controls));
    }

    public function __clone()
    {
        return $this->makeFromCopy($this);
    }
}

$win1 = new Window("large window", new WindowControls(["submit", "cancel", "close"]));
$win2 = clone $win1;
$win2->setName("small window");
var_dump($win1);
echo "<br>";
var_dump($win2);
?>

<h1>
    Prototype
</h1>

<p>
    is a creational design pattern that lets you copy existing objects without making your code dpendent on their classes
</p>

<pre>
declare(strict_types=1);

interface ClonableInterface {
    public function __clone();
}

class WindowControls {
    public function __construct(public array $controls)
    {
    }
}

class Window implements ClonableInterface {
    public function __construct(
        protected string $name,
        protected WindowControls $controls
    )
    {
    }

    public function setName(string $newName) {
        $this->name = $newName;
    }

    protected function makeFromCopy(Window $w): Window
    {
        return new static($w->name, new WindowControls($w->controls->controls));
    }

    public function __clone()
    {
        return $this->makeFromCopy($this);
    }
}

$win1 = new Window("large window", new WindowControls(["submit", "cancel", "close"]));
$win2 = clone $win1;
$win2->setName("small window");
var_dump($win1);
var_dump($win2);
</pre>

<h2>Applicability</h2>
<p>
Use the Prototype pattern when you code shouldn't depend on the concrete classes of objects that you need to copy.
</p>
<p>
Use the pattern when you want to reduce the number of sumclasses that only differ in the way they initialize their respective objects. Somebody could have created these subclasses to be able to create objects with a specific configuration
</p>
