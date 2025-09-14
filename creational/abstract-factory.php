<?php
// interfaces
interface ButtonInteface
{
    public function onClick(): void;
}

interface DialogInterface
{
    public function resize(): void;
}

interface GUIFactoryInterface
{
    public function createButton(): ButtonInteface;
    public function createDialog(): DialogInterface;
}

// implementation
class WebButton implements ButtonInteface
{
    public function onClick(): void
    {
        echo "on click";
    }
}

class IOSButton implements ButtonInteface
{
    public function onClick(): void
    {
        echo "on click";
    }
}

class WebDialog implements DialogInterface
{
    public function resize(): void
    {
        echo "resize";
    }
}

class IOSDialog implements DialogInterface
{
    public function resize(): void
    {
        echo "resize";
    }
}

class WebUIFactory implements GUIFactoryInterface
{
    public function createButton(): ButtonInteface
    {
        return new WebButton();
    }

    public function createDialog(): DialogInterface
    {
        return new WebDialog();
    }
}

class IOSGUIFactory implements GUIFactoryInterface
{
    public function createButton(): ButtonInteface
    {
        return new IOSButton();
    }

    public function createDialog(): DialogInterface
    {
        return new IOSDialog();
    }
}

?>

<h1>Abstract factory</h1>
<p>
    Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes
</p>

<pre>

// interfaces
interface ButtonInteface
{
    public function onClick(): void;
}

interface DialogInterface
{
    public function resize(): void;
}

interface GUIFactoryInterface
{
    public function createButton(): ButtonInteface;
    public function createDialog(): DialogInterface;
}

// implementation
class WebButton implements ButtonInteface
{
    public function onClick(): void
    {
        echo "on click";
    }
}

class IOSButton implements ButtonInteface
{
    public function onClick(): void
    {
        echo "on click";
    }
}

class WebDialog implements DialogInterface
{
    public function resize(): void
    {
        echo "resize";
    }
}

class IOSDialog implements DialogInterface
{
    public function resize(): void
    {
        echo "resize";
    }
}

class WebUIFactory implements GUIFactoryInterface
{
    public function createButton(): ButtonInteface
    {
        return new WebButton();
    }

    public function createDialog(): DialogInterface
    {
        return new WebDialog();
    }
}

class IOSGUIFactory implements GUIFactoryInterface
{
    public function createButton(): ButtonInteface
    {
        return new IOSButton();
    }

    public function createDialog(): DialogInterface
    {
        return new IOSDialog();
    }
}
</pre>
