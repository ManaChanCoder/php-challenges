# PHP Challenge: Grade Evaluator & Switch Statements

Isang simpleng PHP script na nagko-convert ng mga numerical scores sa letter grades at nagbibigay ng kaukulang feedback remarks gamit ang `foreach` loop, `if-else` conditionals, at `switch` statement.

---

## 📌 Features / Requirements

- **Array**: Listahan ng mga numerical scores (`$arrayGrades`).
- **If-Else Conditionals**: Pagtatakda ng letter grades base sa kaukulang score range:
  - `90 - 100`: A
  - `80 - 89`: B
  - `70 - 79`: C
  - `60 - 69`: D
  - `Baba ng 60`: F
- **Switch Statement**: Pagbibigay ng kaukulang remarks at mensahe base sa nakuha nitong letter grade.
- **Iteration**: Paggamit ng `foreach` loop para isa-isang suriin at i-print ang bawat score.

---

## 🖥️ Sample Output

Kapag in-execute sa browser:

```text
Score: 45 => Letter Grade: F
F => Failed. Study more.

Score: 88 => Letter Grade: B
B => Good job!

Score: 92 => Letter Grade: A
A => Excellent!

Score: 60 => Letter Grade: D
D => Needs Improvement.

Score: 30 => Letter Grade: F
F => Failed. Study more.

Score: 100 => Letter Grade: A
A => Excellent!

Score: 75 => Letter Grade: C
C => Fair performance.
```
