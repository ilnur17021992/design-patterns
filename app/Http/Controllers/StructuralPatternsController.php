<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DesignPatterns\Structural\DTO\UserDTO;
use App\DesignPatterns\Structural\DTO\UserDTO2;
use App\DesignPatterns\Structural\DTO\UserDTO3;
use App\DesignPatterns\Structural\DTO\UserDTO4;
use App\DesignPatterns\Structural\Facade\Computer;
use App\DesignPatterns\Structural\Bridge\PdfPrinter;
use App\DesignPatterns\Structural\Bridge\WordPrinter;
use App\DesignPatterns\Structural\Bridge\ExcelPrinter;
use App\DesignPatterns\Structural\Bridge\WeeklyReport;
use App\DesignPatterns\Structural\Decorator\TextEmpty;
use App\DesignPatterns\Structural\Decorator\TextHello;
use App\DesignPatterns\Structural\Decorator\TextSpace;
use App\DesignPatterns\Structural\Decorator\TextWorld;
use App\DesignPatterns\Structural\Bridge\Entities\Product;
use App\DesignPatterns\Structural\Bridge\Entities\Category;
use App\DesignPatterns\Structural\Adapter\MediaLibraryAdapter;
use App\DesignPatterns\Structural\Bridge\ProductWidgetRealization;
use App\DesignPatterns\Structural\Bridge\CategoryWidgetRealization;
use App\DesignPatterns\Structural\Bridge\Abstractions\WidgetBigAbstraction;
use App\DesignPatterns\Structural\Bridge\Abstractions\WidgetSmallAbstraction;
use App\DesignPatterns\Structural\Bridge\Abstractions\WidgetMiddleAbstraction;
use App\DesignPatterns\Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;

class StructuralPatternsController extends Controller
{
    public function decorator()
    {
        $decorator = new TextHello(new TextSpace(new TextWorld(new TextEmpty())));
        $decorator->show(); // Hello world
        echo '<br />' . PHP_EOL;
        $decorator = new TextWorld(new TextSpace(new TextHello(new TextEmpty())));
        $decorator->show(); // world Hello
    }

    public function dto(Request $request)
    {
        $dto = new UserDTO();
        $dto->id = 1;
        $dto->firstName = 'John';
        $dto->lastName = 'Doe';
        dump($dto);


        $dto2 = new UserDTO2();
        $dto2->id = 1;
        $dto2->firstName = 'John';
        $dto2->lastName = 'Doe';
        dump($dto2->toArray());
        dump($dto2->toJson());


        $dto3 = new UserDTO3(1, 'John', 'Doe');
        dump($dto3->getId());
        dump($dto3->getFirstName());
        dump($dto3->getLastName());


        $dto4 = new UserDTO4; // dto?id=1&firstName=John&lastName=Doe

        $dto4::createFromRequest($request);
        dump($request->all());

        $dto4::createFromArray([
            'id' => 1,
            'firstName' => 'John',
            'lastName' => 'Doe',
        ]);
        dump($request->all());
    }

    public function adapter()
    {
        // $mediaLibrary = app(MediaLibraryAdapter::class);
        $mediaLibrary = app(MediaLibraryThirdPartyInterface::class);

        $result[] = $mediaLibrary->upload('test.txt');
        $result[] = $mediaLibrary->get('test.txt');

        dump($result);
    }

    public function facade()
    {
        $computer = new Computer();
        $computer->startComputer();

        dump($computer);
    }

    public function bridge()
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }

        dump($productRealization);
        dump($categoryRealization);
    }
}
