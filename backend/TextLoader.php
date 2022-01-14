<?php

class TextLoader
{

    public function getStageIntoText($stageId): string
    {
        switch ($stageId) {
            case 1:
                return 'Du kommst in eine Bank. Geschäftig laufen die Leute ein und aus - vollkommen in ihrem Element vertieft. Ein Schuss übertönt das hektische Treiben, das nun von Schreien und Ducken abgelöst wird. Im Eingang steht eine schwarz maskierte Frau mit Sturmgewehr. Gangsymbole auf ihrer Jacke suggerieren, dass sie Teil der CPG ist, die mit vielen Projekten die Entwicklung in Dritte Welt Ländern vorantreiben.';
            case 2:
                return 'Immer noch aufgewühlt von den heutigen Ereignissen wirst du auf dem Heimweg von jemandem aus der Bank angesprochen.';
            case 3:
                return 'Die Diskussion dehnt sich aus und ihr tauscht Nummern aus, um euch online weiter zu unterhalten. Infolgedessen lädt dein Gegenüber dich auch in sein Café ein. Im Hinausgehen sagt er noch:';
            case 4:
                return 'Nachdenklich und ohne eine Antwort geht er wieder hinein, während du in den Zug zurücksteigst. Zwei Monate vergehen und der Winter zieht ins Land. Es ist ein Winter heftiger als alle zuvor. Selbst die Pässe, die sonst immer in dein Dorf geführt haben, sind zugeschneit. Hilfe wurde trotz der besonderen Lage erst in fünf Wochen kommen. Stromanbindungen werden von Lawinen zerstört. Ohne Aussicht auf baldige Rettung lässt du als oberster Amtsträger die Vorräte zählen, um zu sehen, wie lange ihr ohne Hilfe ausharren könnt. Ein Angestellter kommt durch die Tür.';
            case 5:
                return 'Nach nur einer Woche des Rationierens rasen schwer gepanzerte Trucks ins Dorf und geben den Leuten Essen. Vier Stunden nach Essensaufnahme wird dir schwindelig und du fällst noch auf dem Heimweg um. Langsam öffnen sich wieder deine Augen, du stehst auf einer kleinen Plattform in einem dunklen weiten Raum. Unter dir sind drei Tanks. Im ersten liegt deine Mutter, im zweiten drei Unbekannte und im dritten Tank zehn weitere Leute. Über ihnen sind Schleusen mit je einem Timer. Der erste zeigt 1:00, der zweite 0:45 und der dritte 0:30. Ein kleiner Roboter beginnt zu sprechen und die Zeit läuft ab.';
            case 6:
                return 'Nachdem du dies gesagt hast, fliegt der Roboter in deine Reichweite, sodass du nach vorne springst, um ihn zu packen. Knapp entwischt er dir und du fällst ins Dunkle. Du fällst und fällst und fällst. Mit einem Schrei fährst du aus dem Schlaf. Der Roboter schwebt einige Meter über dir. Nun stellst du aber fest, dass es ein Pflegeroboter ist und du in einem Krankenhausbett liegst. „Was ist passiert?“';
            case 7:
                return 'Auf dem Weg zum geplanten Ort wirst du von einem Auto angefahren. Diesmal aber erlebst du die Fahrt ins Krankenhaus bei vollem Bewusstsein.';
            case 8:
                return 'Im Halbschlaf bekommst du noch mit, wie einer der Roboter zu einem Arzt sagt: „Doktor, wir brauchen Ersatzorgane und diese Person hätte die genau passenden. Es könnten fünf Menschen gerettet werden!“ Der Arzt kommt zu dir ans Bett:';
            case 9:
                return 'Nach einstündigem Heilschlaf wirst du entlassen. Einer der Roboter hält dich jedoch in der Lobby auf.';
            case 10:
                return 'Müde von den Ereignissen des heutigen Tages legst du dich zu Hause schlafen. Als du die Augen erneut öffnest, siehst du nichts als einen weißen Raum - nicht blendend, aber hell. Vor dir schwebt einer der Krankenhausroboter.';
            case 11:
                return 'Alles verändert sich zu deiner Zufriedenheit. Das Einzige, was noch nicht möglich ist, sind andere Menschen. Diese können nur durch die Roboter über Telefonate kommunizieren. So ruft deine Schwester an und ihr unterhaltet euch über dein neues Leben. Dabei stellt sich heraus, dass dein blinder Kindheitsfreund Solaire auch in eine Matrix transferiert werden muss.';
            case 13:
                return 'Während du nach Hause läufst, wirst du plötzlich von einem der Roboter aufgehalten. Trotz der ausdruckslosen Miene wirkt er panisch.';
            case 14:
                return 'Der scheinbare Roboter beruhigt sich langsam und es stellt sich heraus, dass er zuvor ein Mensch namens Andre war. Ähnlich wie du schlief er eines Tages ein und wachte hier auf - jedoch ohne die Hilfe der Roboter. Noch immer ist Andre ziemlich unsicher.';
            default:
                return "";
        }
    }

    public function getAnswers($stageId): array
    {
        switch ($stageId) {
            case 1:
                return array(
                    0 => '<label class="answer-container">Geh auf die Polizei zu und nenne es den Beamten.<input type="checkbox"><span class="custom-checkbox"></span></label><br><br>',
                    1 => '<label class="answer-container">Warte, bis die Polizei dich direkt fragt und nenne das Kennzeichen dann.<input type="checkbox"><span class="custom-checkbox"></span></label><br><br>',
                    2 => '<label class="answer-container">Verrate es nicht mal im Verhör.<input type="checkbox"><span class="custom-checkbox"></span></label>'
                );
            case 2:
                return array(
                    0 => '<label class="answer-container">„Das wäre zwar schön und theoretisch sicher möglich. Dazu bräuchten wir aber eine Rechenpower, die durch menschliche Methoden nicht erreichbar ist.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">„Vielleicht, vielleicht auch nicht. Neuronen sind von zu vielen Variablen abhängig und wir wissen nicht ob die Chaostheorie greift oder nicht. Man kann also nicht sagen, ob es sich überhaupt berechnen ließe. Vorstellbar ist aber, dass es bestimmbare Tendenzen gibt.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">„Selbst, wenn wir so leistungsstarke Computer hätten, würden sie uns nichts nützen, da Menschen immer noch einen freien Willen haben und somit nichts sicher ist.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 3:
                return array(
                    0 => '<label class="answer-container">„Du könntest ein Schicksal haben, aber woher willst du wissen, dass es dieses ist? Nur weil es dir so gesagt wurde, heißt das nicht, dass es tatsächlich so ist.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">„Was ein Unsinn. Man sucht sich sein eigenes Schicksal aus, wenn man es überhaupt so nennen will. Du hast die Wahl, was du machen willst.“ <input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">„Es deutet zumindest darauf hin, dass es dein Schicksal ist. Wie es aber weitergeht, können wir, wie wir ja bereits festgestellt haben, nicht wissen.“ <input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 4:
                return array(
                    0 => '<label class="answer-container">„Macht es so. Ich will niemandem sein Todesurteil überreichen. Alle werden gleichbehandelt. Dazu ist ein Menschenleben zu viel wert.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">„Das heißt, wenn wir nur der Hälfte der Bevölkerung Essen geben, kann diese überleben. Ansonsten wäre es der Tod für alle. So schwer es mir fällt, wir müssen Opfer bringen, damit der Rest überlebt.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 5:
                return array(
                    0 => '<label class="answer-container">„Mutter, es tut mir leid! Doch das Wohl Vieler überwiegt das Wohl Einzelner. Wenn ich an die Familien der anderen denke, muss meine Antwort "Flute den ersten Tank" lauten.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">„Ich will nicht, dass so viele sterben, aber meine Mutter kann ich nicht opfern. Flute Tank 2!“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">„Du kannst mich nicht zu einer Entscheidung zwingen. Jede der Optionen ist unmoralisch! Ich kann nicht den Tod dieser Menschen entscheiden. Du bist es, der sie umbringt.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 6:
                return array(
                    0 => '<label class="answer-container">Du lebst den Tag wie jeden anderen. Nur weil du stirbst, ist das kein Grund alles zu ändern. Dir wurde dein Leben gegeben und es wird irgendwann genommen. Es gibt nichts, weswegen man übermäßig traurig sein müsste.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Du bist traurig, dass du stirbst, hast dich aber mental schon darauf vorbereitet und informierst nur noch deine Verwandten, wobei deine Mutter aus unbekannten Gründen den Anruf nicht entgegennimmt. Danach gehst du ein letztes Mal auf deine Art und Weise feiern.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Die Nähe des Todes erschüttert dich und du lässt es richtig krachen. Was kümmert dich das Morgen.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 7:
                return array(
                    0 => '<label class="answer-container">„Ja. Wie schlimm ist es? Werde ich noch mit meiner Familie reden können?“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">„Ja. Könnten Sie mir dann bitte mein Buch oder mein Tablet auf die Station bringen? Es ist ja nichts Erschütterndes, also würde ich gerne nicht zu sehr dadurch gestört werden.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">„Ja. Sagen sie es mir geradeaus: werde ich noch feiern können?“<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 8:
                return array(
                    0 => '<label class="answer-container">„Auf jeden Fall! Das Glück der vielen ist größer als das Glück des einzelnen.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">„Fragen Sie die Person. Wenn sie "nein" sagt, dann nicht - ansonsten besteht darin kein Problem.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">„Nein, es ist grundsätzlich falsch, Menschen zu töten. Auch wenn dadurch andere gerettet werden. Man darf Menschenleben nicht gegeneinander aufwiegen.“<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 9:
                return array(
                    0 => '<label class="answer-container">Erschüttert über den Verlust begibst du dich nach Hause und lässt deinen Gefühlen freien Lauf.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Es ist wohl ein Tag der schlechten Neuigkeiten, aber so was passiert. Kein Grund, sich aus der Ruhe bringen zu lassen.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Betrübt durch den Verlust gehst du nach Hause und versuchst den Abend noch so normal wie möglich zu gestalten.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 10:
                return array(
                    0 => '<label class="answer-container">Verwandle es in eine Sintflut aus sinnlichen Genüssen.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Gönne dir viel Sinnliches, aber halte es so in Maßen, dass auch der Geist<br> beansprucht wird.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Verwandle es in eine Oase der Einkehr und des Geistes, in der Ruhe vorrangig ist.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                );
            case 11:
                return array(
                    0 => '<label class="answer-container">Wird schon gut gehen. Durch das Erfühlen kann er das Objekt begreifen und wird es also auch wiedererkennen.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Es wird sicherlich eine Weile dauern. Nur weil er die Sache mit einem Sinn wahrgenommen hat, heißt es noch nicht, dass es ihm mit anderen Sinnen gelingt. Dazu muss es erlebt werden. Eine Sache kann nicht begriffen werden, sondern nur für sich sein.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Könnte sein. Wahrscheinlich werden Gegenstände mit besonders einzigartigen Formen klar sein. Wird aber sicher eine schwere Zeit.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 12:
                return array(
                    0 => '<label class="answer-container">Nein. Eine Sache kann nur für sich sein. Die Imitation einer Sache wäre nur genau das, dass eine Imitation wieder separat für sich ist.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">In gewisser Weise ja, aber nicht tatsächlich. Es ist die Idee der Sache und damit ein Teil der Sache. Aber nicht die Sache an sich.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Die Sache ist nie in unserer Welt vollkommen gewesen. Dementsprechend ist die Illusion der Sache genauso real wie die Sache in der Nicht-Matrix.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 13:
                return array(
                    0 => '<label class="answer-container">Komm runter. Du hast zwar das Äußere einer Maschine, aber innerlich bist du sicher noch ein Mensch. Wenn du meinst, du kannst frei entscheiden, dann ist es wahrscheinlich auch so.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Ich habe keine Ahnung, ob du Mensch oder Maschine bist. Ich bin mir ja bei mir selbst nicht mal sicher. Aber warum sollte dich das runterziehen? Du fühlst dich als hättest du freien Willen. Damit kannst du ein so erfülltes Leben führen, wie jeder andere Mensch auch.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Selbst wenn du ein Mensch wärest, sind Menschen nichts anderes als sehr fortschrittliche Roboter. Der Code sind die neuronalen Strukturen. Also keine Sorge, du bist nicht weniger Mensch als davor.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 14:
                return array(
                    0 => '<label class="answer-container">Du kannst es nicht wissen. Es ist insofern real, als dass wir Einfluss nehmen können. Wir sehen es, wir fühlen es, wir können es verändern. Darum müssen wir es als real annehmen.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Wenn du meinst, dass es die Dinge der realen Welt sind, dann nein. Diese Welt ist für sich und kann nur für sich erlebt werden. Wobei es an und für sich nicht weniger Validation hat als die reale Welt. Sie ist nur anders, eine Imitation, aber nicht grundsätzlich mehr oder weniger wert.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Woher willst du wissen, dass die andere Welt real war? In beiden Fällen hast du nur deine Sinneswahrnehmungen, um festzustellen ob etwas da ist oder nicht. Und hier sind diese so real wie draußen. Daher verlasse dich nicht darauf - erfasse die Dinge mit dem Geist. Was ist die Idee des Gegenstands? Und da diese die gleiche ist, ist es genauso real wie außerhalb der Matrix.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 15:
                return array(
                    0 => '<label class="answer-container">Kannst du die Dinge fühlen? Kannst du erleben? Dann bist du. Es braucht keinen weiteren Beweis.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Du kannst denken. Das heißt du kannst verstehen. Das ist der Beweis, dass du bist.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            case 16:
                return array(
                    0 => '<label class="answer-container">Der Mensch war nie frei. Alles ist vorherbestimmt. Jegliche Idee von freiem Willen ist nur eine Illusion.<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    1 => '<label class="answer-container">Da es Zufall in der Welt gibt, wie zum Beispiel Quantenfluctuation, heißt das, dass nicht alles vorausberechenbar ist. Darum kannst du auch annehmen, dass es zumindest so etwas wie freien Willen gibt. Und da wir bereits festgestellt haben, dass du wahrscheinlich existierst, warum solltest du ihn nicht haben?<input type="checkbox"><span class="custom-checkbox"></span></label><br>',
                    2 => '<label class="answer-container">Keine Ahnung, man. Es gibt sicher einige Dinge, die du selbst beeinflussen kannst. Aber andere sind durch Gene, Erziehung und ähnliches vorgeprägt. Inwieweit das nun auf dich zutrifft und wie stark du vorgeprägt bist, kann ich nicht sagen.<input type="checkbox"><span class="custom-checkbox"></span></label><br>'
                );
            default:
                return array();
        }
    }

}